<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
	<?php
	$username = [
		'name' => 'username',
		'id' => 'username',
		'value' => null,
		'class' => 'form-control'
	];

	$password = [
		'name' => 'password',
		'id' => 'password',
		'class' => 'form-control'
	];

	$session = session();
	$errors = $session->getFlashdata('errors');
	?>
	<h1>Login Form</h1>
	<?php if($errors != null): ?>
		<div id="error-alert" class="alert alert-danger" role="alert">
			<h4 class="alert-heading">Terjadi Kesalahan</h4>
			<hr>
			<p class="mb-0">
				<?php
					foreach($errors as $err){
						echo $err.'<br>';
					}
				?>
			</p>
		</div>
	<?php endif ?>
	<?= form_open('Auth/login') ?>
<body>
  <div class="wrapper">
    <form action="#">
      <h2>Login</h2>
	  <div class="input-field">
    <input type="text" name="username" required>
    <label class="mt-3">Username</label>
</div>
<div class="input-field">
<input type="password" name="password" required>
    <label class="mt-3">Password</label>
</div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="<?= base_url('User/register') ?>" class="btn btn-secondary">Register</a>
      </div>
    </form>
  </div>
</body>

<?= $this->endSection() ?>