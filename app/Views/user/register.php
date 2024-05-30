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

$repeatPassword = [
    'name' => 'repeat_password',
    'id' => 'repeat_password',
    'class' => 'form-control'
];

$session = session();
$errors = $session->getFlashdata('errors');
?>
<h1>Register Form</h1>
<?php if ($errors != null) : ?>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Terjadi Kesalahan</h4>
        <hr>
        <p class="mb-0">
            <?php
            foreach ($errors as $err) {
                echo $err . '<br>';
            }
            ?>
        </p>
    </div>
<?php endif ?>
<?= form_open('User/register') ?>
<body>
  <div class="wrapper">
    <form action="#">
      <h2>Daftar</h2>
      <div class="input-field">
    <input type="text" name="username" required>
    <label class="mt-3">Username</label>
</div>
<div class="input-field">
<input type="password" name="password" required>
    <label class="mt-3">Password</label>
</div>
<div class="input-field">
<input type="password" name="repeat_password" required>
    <label class="mt-3">Password</label>
</div>

      <button type="submit">Daftar</button>
      </div>
    </form>
  </div>
</body>
<?= form_close() ?>
<?= $this->endSection() ?>