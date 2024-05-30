<!doctype html>
<?php
$errors = session()->getFlashData('errors');
$success = session()->getFlashData('success');
?>
<html lang="en">

<head>

  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}
body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  width: 100%;
  padding: 0 10px;
}
body::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: url("https://www.codingnepalweb.com/demos/create-glassmorphism-login-form-html-css/hero-bg.jpg"), #000;
  background-position: center;
  background-size: cover;
}
.wrapper {
  width: 400px;
  border-radius: 8px;
  padding: 30px;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}
form {
  display: flex;
  flex-direction: column;
}
h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #fff;
}
.input-field {
  position: relative;
  border-bottom: 2px solid #ccc;
  margin: 15px 0;
}
.input-field label {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  color: #fff;
  font-size: 16px;
  pointer-events: none;
  transition: 0.15s ease;
}
.input-field input {
  width: 100%;
  height: 40px;
  background: transparent;
  border: none;
  outline: none;
  font-size: 16px;
  color: #fff;
}
.input-field input:focus~label,
.input-field input:valid~label {
  font-size: 0.8rem;
  top: 10px;
  transform: translateY(-120%);
}
.forget {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 25px 0 35px 0;
  color: #fff;
}
#remember {
  accent-color: #fff;
}
.forget label {
  display: flex;
  align-items: center;
}
.forget label p {
  margin-left: 8px;
}
.wrapper a {
  color: #efefef;
  text-decoration: none;
}
.wrapper a:hover {
  text-decoration: underline;
}
button {
  background: #fff;
  color: #000;
  font-weight: 600;
  border: none;
  padding: 12px 20px;
  cursor: pointer;
  border-radius: 3px;
  font-size: 16px;
  border: 2px solid transparent;
  transition: 0.3s ease;
}
button:hover {
  color: #fff;
  border-color: #fff;
  background: rgba(255, 255, 255, 0.15);
}
.register {
  text-align: center;
  margin-top: 30px;
  color: #fff;
}
  </style>
</head>

<body>
  <main>
    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <?= $this->renderSection('content') ?>
      </div>
    </div>

  </main>

  <footer class="text-body-secondary py-5">
    <div class="container">
      <p class="mb-1">@RioHerlambang 2024</p>
    </div>
  </footer>


</body>
<script src="<?= base_url('jquery-3.7.1.min.js') ?>"></script>
<script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('sweetalert2.all.min.js') ?>"></script>
<script>
  <?php if ($errors != null) : ?>
    var text_errors = [];
    <?php foreach ($errors as $err) : ?>
      text_errors.push("<span class='text-danger'><?= $err ?></span><br>");
    <?php endforeach ?>
    Swal.fire({
      icon: "error",
      title: "Oops...",
      html: text_errors.join(''),
    });
  <?php endif ?>
  <?php if ($success != null) : ?>
    Swal.fire(
      'Success!',
      '<?= $success ?>',
      'success '
    );
  <?php endif ?>
</script>
<?= $this->renderSection('script') ?>

</html>