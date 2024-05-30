<!doctype html>
<?php
$errors = session()->getFlashData('errors');
$success = session()->getFlashData('success');
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>CafeRI</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <meta name="theme-color" content="#712cf9">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    main {
      margin: 0 auto;
      min-height: 900px;
      max-width: 1400px;
      padding: 2.5rem 1.75rem 3.5rem 1.75rem;
    }
  </style>
</head>

<body>
  <header>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container-fluid">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>CafeRI</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url('Home') ?>">Home</a>
            </li>
            <li>
              <a class="nav-link active" aria-current="page" href="<?= base_url('menu/index') ?>">Menu</a>
            </li>
            <li>
              <a class="nav-link active" aria-current="page" href="<?= base_url('/pelanggan') ?>">Pelanggan</a>
            </li>
            <li>
              <a class="nav-link active" aria-current="page" href="<?= base_url('transaksi') ?>">transaksi</a>
            </li>
          </ul>
          <span class="navbar-text">
            <a href="<?= base_url('auth/logout') ?>">Logout</a>
          </span>
        </div>
      </div>
    </div>
  </header>

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