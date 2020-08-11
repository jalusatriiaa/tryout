<img class="wave" src="../assets/dist/img/wave.png">
<div class="container">
  <div class="img">
    <img src="../assets/dist/img/bg.svg">
  </div>
  <div class="login-content">
    <?= form_open("auth/postRegister", array('id' => 'submit')); ?>
    <img src="../assets/dist/img/avatar.svg">
    <h2 class="animated bounceInDown title text-info">Pendaftaran</h2>
    <div class="input-div one">
      <div class="i">
        <i class="fas fa-user"></i>
      </div>
      <div class="div">
        <h5>Username</h5>
        <input type="text" class="input" name="username" value="<?= set_value('username') ?>">
      </div>
    </div>
    <p><?php echo form_error('username'); ?></p>
    <div class="input-div one">
      <div class="i">
        <i class="fas fa-user"></i>
      </div>
      <div class="div">
        <h5>Nama Lengkap</h5>
        <input type="text" class="input" name="fullname" value="<?= set_value('fullname') ?>">
      </div>
    </div>
    <p><?php echo form_error('fullname'); ?></p>
    <div class="input-div one">
      <div class="i">
        <i class="fas fa-school"></i>
      </div>
      <div class="div">
        <h5>Asal Sekolah</h5>
        <input type="text" class="input" name="school" value="<?= set_value('school') ?>">
      </div>
    </div>
    <p><?php echo form_error('school'); ?></p>
    <div class="input-div one">
      <div class="i">
        <i class="fas fa-envelope"></i>
      </div>
      <div class="div">
        <h5>Email</h5>
        <input type="email" class="input" name="email" value="<?= set_value('email') ?>">
      </div>
    </div>
    <p><?php echo form_error('email'); ?></p>
    <div class="input-div pass">
      <div class="i">
        <i class="fas fa-lock"></i>
      </div>
      <div class="div">
        <h5>Kata Sandi</h5>
        <input type="password" class="input" name="password" value="<?= set_value('password') ?>">
      </div>
    </div>
    <p><?php echo form_error('password_confirmation'); ?></p>
    <div class="input-div pass">
      <div class="i">
        <i class="fas fa-lock"></i>
      </div>
      <div class="div">
        <h5>Konfirmasi Kata Sandi</h5>
        <input type="password" class="input" name="password_confirmation" value="<?= set_value('password_confirmation') ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="jurusan">Jurusan</label>
      <select class="form-control" id="jurusan" name="jurusan">
        <option value="1">SAINTEK</option>
        <option value="2">SOSHUM</option>
      </select>
      <small class="help-block"></small>
    </div>
    <?= form_submit('submit', 'Daftar', array('id' => 'register_submit', 'class' => 'btn btn-primary btn-block btn-flat')); ?>
    <?= form_close(); ?>
  </div>
</div>
