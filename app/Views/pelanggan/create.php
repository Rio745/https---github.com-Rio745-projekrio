<?= $this->extend('dashboard1') ?>
<?= $this->section('content') ?>
<?php
$nama = [
	'name' => 'nama',
	'class' => 'form-control'
];

$jk = [
	'name' => 'jk',
	'class' => 'form-control'
];

$alamat = [
	'name' => 'alamat',
	'class' => 'form-control'
];

$no_hp = [
	'name' => 'no_hp',
	'class' => 'form-control'
];
?>
<h1>Tambah Pelanggan</h1>
<?= form_open('pelanggan/create') ?>
<div class="form-group">
	<?= form_label('Nama', 'nama') ?>
	<?= form_input($nama) ?>
</div>
<div class="form-group">
	<?= form_label('Jenis Kelamin', 'jk') ?>
	<?= form_input($jk) ?>
</div>
<div class="form-group">
	<?= form_label('Alamat', 'alamat') ?>
	<?= form_input($alamat) ?>
</div>
<div class="form-group">
	<?= form_label('Nomor HP', 'no_hp') ?>
	<?= form_input($no_hp) ?>
</div>
<div class="text-end mt-3">
	<?= form_submit('submit','Submit',['class'=>'btn btn-primary']) ?>
</div>
<?= form_close() ?>
<?= $this->endSection() ?>
