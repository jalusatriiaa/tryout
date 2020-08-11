<?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Profil <strong>Berhasil </strong> <?= $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if( $this->ion_auth->is_admin() ) : ?>

<?php elseif( $this->ion_auth->in_group('dosen') ) : ?>

<div class="row">
    <div class="col-sm-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Informasi Akun</h3>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>Nama</th>
                    <td><?=$dosen->nama_dosen?></td>
                </tr>
                <tr>
                    <th>ID</th>
                    <td><?=$dosen->nip?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$dosen->email?></td>
                </tr>
                <tr>
                    <th>Jenis</th>
                    <td><?=$dosen->nama_mataujian?></td>
                </tr>
                <tr>
                    <th>Ujian Seleksi</th>
                    <td>
                        <ol class="pl-4">
                        <?php foreach ($kelas as $k) : ?>
                            <li><?=$k->nama_kelas?></li>
                        <?php endforeach;?>
                        </ol>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="box box-solid">
            <div class="box-header bg-purple">
                <h3 class="box-title">Pemberitahuan</h3>
            </div>
            <div class="box-body">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem in animi quibusdam nihil esse ratione, nulla sint enim natus, aut mollitia quas veniam, tempore quia!</p>
                <ul class="pl-4">
                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, culpa.</li>
                    <li>Provident dolores doloribus, fugit aperiam alias tempora saepe non omnis.</li>
                    <li>Doloribus sed eum et repellat distinctio a repudiandae quia voluptates.</li>
                    <li>Adipisci hic rerum illum odit possimus voluptatibus ad aliquid consequatur.</li>
                    <li>Laudantium sapiente architecto excepturi beatae est minus, labore non libero.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php else : ?>

<div class="row">
    <div class="col-sm-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex animated fadeIn fast">
                <h5>Informasi Akun</h5>
                <a class="btn btn-success btn-sm ml-auto" href="<?=base_url('profil/edit')?>"> Edit Profil </a>
            </div>
            <table class="table table-striped animated fadeIn fast">
                <tr>
                    <th>ID</th>
                    <td><?=$member->username?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><?=$member->nama?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$member->email?></td>
                </tr>
                <tr>
                    <th>Asal Sekolah</th>
                    <td><?=$member->sekolah?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="card shadow mb-4 animated fadeIn fast">
            <div class="card-header py-3">
                <h3 class="box-title">Petunjuk Pengerjaan Tryout</h3>
            </div>
            <div class="card-body">
                <p>Petunjuk teknis pengerjaan Tryout UTBK</p>
                <ul class="pl-4">
                    <li>Jenis Ujian terdiri dari TPA,TKD</li>
                    <li>TPA (Test Potensi Akademik) waktu pengerjaan 40 menit dengan 45 butir soal. Benar +1 Salah 0  </li>
                    <li>TKD (Test Kompetensi Dasar) waktu pengerjaan 60 menit dengan 500 butir soal. Benar +1 Salah 0 </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>
