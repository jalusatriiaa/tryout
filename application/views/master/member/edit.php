<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Form <?= $judul ?></h3>
    <div class="box-tools pull-right">
      <a href="<?= base_url('member') ?>" class="btn btn-sm btn-flat btn-warning">
        <i class="fa fa-arrow-left"></i> Batal
      </a>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <?= form_open('member/save', array('id' => 'member'), array('method' => 'edit', 'id_member' => $member->id_member)) ?>
        <div class="form-group">
          <label for="username">Username</label>
          <input value="<?= $member->username ?>" autofocus="autofocus" onfocus="this.select()" placeholder="Username" type="text" name="username" class="form-control">
          <small class="help-block"></small>
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input value="<?= $member->nama ?>" placeholder="Nama" type="text" name="nama" class="form-control">
          <small class="help-block"></small>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input value="<?= $member->email ?>" placeholder="Email" type="email" name="email" class="form-control">
          <small class="help-block"></small>
        </div>
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-control select2">
            <option value="">-- Pilih --</option>
            <option <?= $member->jenis_kelamin === "L" ? "selected" : "" ?> value="L">Laki-laki</option>
            <option <?= $member->jenis_kelamin === "P" ? "selected" : "" ?> value="P">Perempuan</option>
          </select>
          <small class="help-block"></small>
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <select id="jurusan" name="jurusan" class="form-control select2">
            <option value="1" <?php $member->kelas_id === 1 ? 'selected' : '' ?>>SAINTEK</option>
            <option value="2" <?php $member->kelas_id === 2 ? 'selected' : '' ?>>SOSHUM</option>
          </select>
          <small class="help-block"></small>
        </div>
        <div class="form-group pull-right">
          <button type="reset" class="btn btn-flat btn-default"><i class="fa fa-rotate-left"></i> Reset</button>
          <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Simpan</button>
        </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>
</div>

<script src="<?= base_url() ?>assets/dist/js/app/master/member/edit.js"></script>
