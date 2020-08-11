<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->ion_auth->logged_in()) {
      redirect('auth');
    } else if (!$this->ion_auth->is_admin()) {
      show_error('Hanya Administrator yang diberi hak untuk mengakses halaman ini, <a href="' . base_url('dashboard') . '">Kembali ke menu awal</a>', 403, 'Akses Terlarang');
    }
    $this->load->library(['datatables', 'form_validation']); // Load Library Ignited-Datatables
    $this->load->model('Master_model', 'master');
    $this->form_validation->set_error_delimiters('', '');
  }

  public function output_json($data, $encode = true)
  {
    if ($encode) $data = json_encode($data);
    $this->output->set_content_type('application/json')->set_output($data);
  }

  public function index()
  {
    $data = [
      'user' => $this->ion_auth->user()->row(),
      'judul'  => 'Member',
      'subjudul' => 'Data Member'
    ];
    $this->load->view('_templates/dashboard/_header.php', $data);
    $this->load->view('master/member/data');
    $this->load->view('_templates/dashboard/_footer.php');
  }

  public function data()
  {
    $this->output_json($this->master->getDataMahasiswa(), false);
  }

  public function add()
  {
    $data = [
      'user' => $this->ion_auth->user()->row(),
      'judul'  => 'Member',
    ];
    $this->load->view('_templates/dashboard/_header.php', $data);
    $this->load->view('master/member/add');
    $this->load->view('_templates/dashboard/_footer.php');
  }

  public function edit($id)
  {
    $mhs = $this->master->getMahasiswaById($id);
    $data = [
      'user'     => $this->ion_auth->user()->row(),
      'judul'    => 'Member',
      'subjudul'  => 'Edit Data Member',
      'seleksi'  => $this->master->getJurusan(),
      'kelas'    => $this->master->getKelasByJurusan($mhs->seleksi_id),
      'member' => $mhs
    ];
    $this->load->view('_templates/dashboard/_header.php', $data);
    $this->load->view('master/member/edit');
    $this->load->view('_templates/dashboard/_footer.php');
  }

  public function validasi_member($method)
  {
    $id_member   = $this->input->post('id_member', true);
    $username       = $this->input->post('username', true);
    $email       = $this->input->post('email', true);
    if ($method == 'add') {
      $u_username = '|is_unique[member.username]';
      $u_email = '|is_unique[member.email]';
    } else {
      $dbdata   = $this->master->getMahasiswaById($id_member);
      $u_username    = $dbdata->username === $username ? "" : "|is_unique[member.username]";
      $u_email  = $dbdata->email === $email ? "" : "|is_unique[member.email]";
    }
    $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[6]|max_length[20]' . $u_username);
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[3]|max_length[50]');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email' . $u_email);
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

    $this->form_validation->set_message('required', 'Kolom {field} wajib diisi');
  }

  public function save()
  {
    $method = $this->input->post('method', true);
    $this->validasi_member($method);

    if ($this->form_validation->run() == FALSE) {
      $data = [
        'status'  => false,
        'errors'  => [
          'username' => form_error('username'),
          'nama' => form_error('nama'),
          'sekolah' => form_error('sekolah'),
          'email' => form_error('email'),
          'password' => form_error('password'),
          'confirm_password' => form_error('confirm_password'),
          'jurusan' => form_error('jurusan'),
        ]
      ];
      $this->output_json($data);
    } else {
    //   $input = [
    //     'username'   => $this->input->post('username', true),
    //     'nama'       => $this->input->post('nama', true),
    //     'sekolah'    => $this->input->post('sekolah', true),
    //     'email'      => $this->input->post('email', true),
    //     // 'password'   => $this->input->post('password', true),
    //     'kelas_id'    => $this->input->post('jurusan', true),
    //   ];
    //   if ($method === 'add') {
    //     $action = $this->master->create('member', $input);

    //     // $this->ion_auth->register(
    //     //   $username, $password, $email, $additional_data, $group);
    //   } else if ($method === 'edit') {
    //     $id = $this->input->post('id_member', true);
    //     $action = $this->master->update('member', $input, 'id_member', $id);
    //   }

    //   if ($action) {
    //     $this->output_json(['status' => true]);
    //   } else {
    //     $this->output_json(['status' => false]);
    //   }
    }
  }

  public function delete()
  {
    $chk = $this->input->post('checked', true);
    if (!$chk) {
      $this->output_json(['status' => false]);
    } else {
      if ($this->master->delete('member', $chk, 'id_member')) {
        $this->output_json(['status' => true, 'total' => count($chk)]);
      }
    }
  }

  public function create_user()
  {
    $id = $this->input->get('id', true);
    $data = $this->master->getMahasiswaById($id);
    $nama = explode(' ', $data->nama);
    $first_name = $nama[0];
    $last_name = end($nama);

    $username = $data->username;
    $password = $data->username;
    $email = $data->email;
    $additional_data = [
      'first_name'  => $first_name,
      'last_name'    => $last_name
    ];
    $group = array('3'); // Sets user to dosen.

    if ($this->ion_auth->username_check($username)) {
      $data = [
        'status' => false,
        'msg'   => 'Username tidak tersedia (sudah digunakan).'
      ];
    } else if ($this->ion_auth->email_check($email)) {
      $data = [
        'status' => false,
        'msg'   => 'Email tidak tersedia (sudah digunakan).'
      ];
    } else {
      $this->ion_auth->register($username, $password, $email, $additional_data, $group);
      $data = [
        'status'  => true,
        'msg'   => 'User berhasil dibuat. ID digunakan sebagai password pada saat login.'
      ];
    }
    $this->output_json($data);
  }

  public function import($import_data = null)
  {
    $data = [
      'user' => $this->ion_auth->user()->row(),
      'judul'  => 'Member',
      'subjudul' => 'Import Data Member',
      'kelas' => $this->master->getAllKelas()
    ];
    if ($import_data != null) $data['import'] = $import_data;

    $this->load->view('_templates/dashboard/_header', $data);
    $this->load->view('master/member/import');
    $this->load->view('_templates/dashboard/_footer');
  }
  public function preview()
  {
    $config['upload_path']    = './uploads/import/';
    $config['allowed_types']  = 'xls|xlsx|csv';
    $config['max_size']      = 2048;
    $config['encrypt_name']    = true;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('upload_file')) {
      $error = $this->upload->display_errors();
      echo $error;
      die;
    } else {
      $file = $this->upload->data('full_path');
      $ext = $this->upload->data('file_ext');

      switch ($ext) {
        case '.xlsx':
          $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
          break;
        case '.xls':
          $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
          break;
        case '.csv':
          $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
          break;
        default:
          echo "unknown file ext";
          die;
      }

      $spreadsheet = $reader->load($file);
      $sheetData = $spreadsheet->getActiveSheet()->toArray();
      $data = [];
      for ($i = 1; $i < count($sheetData); $i++) {
        $data[] = [
          'username' => $sheetData[$i][0],
          'nama' => $sheetData[$i][1],
          'email' => $sheetData[$i][2],
          'jenis_kelamin' => $sheetData[$i][3],
          'kelas_id' => $sheetData[$i][4]
        ];
      }

      unlink($file);

      $this->import($data);
    }
  }

  public function do_import()
  {
    $input = json_decode($this->input->post('data', true));
    $data = [];
    foreach ($input as $d) {
      $data[] = [
        'username' => $d->username,
        'nama' => $d->nama,
        'email' => $d->email,
        'jenis_kelamin' => $d->jenis_kelamin,
        'kelas_id' => $d->kelas_id
      ];
    }

    $save = $this->master->create('member', $data, true);
    if ($save) {
      redirect('member');
    } else {
      redirect('member/import');
    }
  }
}
