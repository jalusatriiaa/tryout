<img class="wave" src="assets/dist/img/wave.png">
<div class="container">
  <div class="img">
    <img src="assets/dist/img/bg.svg">
  </div>
  <div class="login-content">
    <?= form_open("auth/cek_login", array('id' => 'login')); ?>
    <!-- <?php echo $this->session->flashdata('message') ?> -->
    <img src="assets/dist/img/avatar.svg">
    <h2 class="animated bounceInDown title text-info">Siap Tryout</h2>
    <div id="infoMessage" class="text-center text-info"><?php echo $message;?></div>
    <div class="input-div one mt-4">
      <div class="i">
        <i class="fas fa-envelope"></i>
      </div>
      <div class="div">
        <h5>Email</h5>
        <input type="text" class="input" name="identity">
      </div>
    </div>
    <div class="input-div pass">
      <div class="i">
        <i class="fas fa-lock"></i>
      </div>
      <div class="div">
        <h5>Kata Sandi</h5>
        <input type="password" class="input" name="password">
      </div>
    </div>
    <a href="<?= base_url('auth/forgot_password') ?>">Lupa Kata Sandi?</a>
    <?= form_submit('submit', lang('login_submit_btn'), array('id' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat')); ?>
    <?= form_close(); ?>
  </div>
</div>

<script type="text/javascript">
  let base_url = '<?= base_url(); ?>';
</script>
<script src="<?= base_url() ?>assets/dist/js/app/auth/login.js"></script>
