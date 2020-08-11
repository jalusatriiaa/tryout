<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h3 class="box-title">Form <?= $judul ?></h3>
    <div class="box-tools pull-right">
      <a href="<?= base_url('member') ?>" class="btn btn-sm btn-flat btn-warning">
        <i class="fa fa-arrow-left"></i> Batal
      </a>
    </div>
  </div>
  <div class="card-body">
    <div class="row justify-content-center">
      <div class="col-sm-4 col-sm-offset-4">
        <?= form_open('member/save', array('id' => 'member'), array('method' => 'add')) ?>
        <div class="form-group">
          <label for="username">Username</label>
          <input value="aaaaaa" autofocus="autofocus" onfocus="this.select()" placeholder="Username" type="text" name="username" class="form-control">
          <small class="help-block"></small>
        </div>
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input value="aaaaaa" placeholder="Nama" type="text" name="nama" class="form-control">
          <small class="help-block"></small>
        </div>
        <div class="form-group">
          <label for="sekolah">Sekolah</label>
          <input value="a" placeholder="SMA..." type="text" name="school" class="form-control">
          <small class="help-block"></small>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input value="a@a.a" placeholder="john@doe.com" type="email" name="email" class="form-control">
          <small class="help-block"></small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input value="123456" placeholder="Password" type="password" name="password" class="form-control">
          <small class="help-block"></small>
        </div>
        <div class="form-group">
          <label for="confirm_password">Konfirmasi Password</label>
          <input value="123456" placeholder="Password" type="password" name="confirm_password" class="form-control">
          <small class="help-block"></small>
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <select name="jurusan" class="form-control select2">
            <option value="" disabled>-- Pilih --</option>
            <option value="0" selected>SAINTEK</option>
            <option value="1">SOSHUM</option>
          </select>
          <small class="help-block"></small>
        </div>
        <div class="form-group float-right">
          <button type="reset" class="btn btn-flat btn-info"><i class="fa fa-rotate-left"></i> Reset</button>
          <button type="submit" id="submit" class="btn btn-flat btn-success"><i class="fa fa-save"></i> Simpan</button>
        </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>
</div>

<script src="<?= base_url() ?>assets/dist/js/app/master/member/add.js"></script>
