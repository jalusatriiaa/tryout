<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()){
			redirect('auth');
        }

        $this->load->library(['datatables', 'form_validation']);// Load Library Ignited-Datatables
        $this->load->helper('my');
        $this->load->model('Master_model', 'master');
        $this->load->model('Ujian_model', 'ujian');
        $this->load->model('Profil_model', 'profil');
        $this->user = $this->ion_auth->user()->row();
        $this->mhs 	= $this->ujian->getIdMahasiswa($this->user->username);
        $this->form_validation->set_error_delimiters('','');

    }

    public function index(){

        $mhs		    = $this->mhs;
        $id_mhs = $mhs->id_member;
        $pilihan = $this->ujian->getPrediksiKelulusan($mhs->id_member)->row();


        $data = [
			'user' => $this->ion_auth->user()->row(),
			'judul'	=> 'Profil',
            'subjudul'=> '',
            'profil'    => $this->profil->editProfil($id_mhs),
        ];

        $this->load->view('_templates/dashboard/_header.php', $data);
		$this->load->view('profil/index', $data);
		$this->load->view('_templates/dashboard/_footer.php');
    }

    public function Edit(){

        $mhs		    = $this->mhs;
        $id_mhs = $mhs->id_member;

        $data = [
			'user' => $this->ion_auth->user()->row(),
			'judul'	=> 'Edit Profil',
            'subjudul'=> '',
            'profil'    => $this->profil->editProdiPilihan(),
            'identitas' => $this->profil->editProfil($id_mhs),
            'tampil_prodi'  => $this->profil->tampilProdi($id_mhs),
        ];

        $this->load->view('_templates/dashboard/_header.php', $data);
		$this->load->view('profil/edit', $data);
		$this->load->view('_templates/dashboard/_footer.php');
    }

    public function editProfil(){
        $this->load->helper('string');

        $nama_lengkap	= $this->input->post('nama_lengkap', true);
        $asal_sekolah	= $this->input->post('asal_sekolah', true);
        $mhs		    = $this->mhs;
        $id_mhs         = $mhs->id_member;


        $input = [
            'nama'          => $nama_lengkap,
            'sekolah'       => $asal_sekolah,
        ];

        $this->master->update('member', $input, 'id_member', $id_mhs);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('dashboard');
    }
}

?>
