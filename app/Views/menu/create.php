<?= $this->extend('dashboard1') ?>
<?= $this->section('content') ?>
<?php
$nama = [
	'name' => 'nama',
	'class' => 'form-control'
];

$harga = [
	'name' => 'harga',
	'class' => 'form-control',
	'type' => 'number',
];

$gambar = [
	'name' => 'gambar',
	'type' => 'file',
];
?>
<h1>Tambah Menu</h1>
<?= form_open('menu/create',[
	'enctype' => 'multipart/form-data'
]) ?>
<div class="form-group">
	<?= form_label('Nama', 'nama') ?>
	<?= form_input($nama) ?>
</div>
<div class="form-group">
	<?= form_label('Harga', 'harga') ?>
	<?= form_input($harga) ?>
</div>

<label for="jenis_menu" class="mt-3">Jenis Menu</label>
<div class="form-check">
	<input value="makanan" class="form-check-input" type="radio" name="jenis_menu" id="flexRadioDefault1">
	<label class="form-check-label" for="flexRadioDefault1">
		Makanan
	</label>
</div>
<div class="form-check">
	<input value="minuman" class="form-check-input" type="radio" name="jenis_menu" id="flexRadioDefault2">
	<label class="form-check-label" for="flexRadioDefault2">
		Minuman
	</label>
</div>
<div class="form-group mt-3">
	<?= form_label('Gambar', 'gambar') ?>
	<?= form_upload($gambar) ?>
</div>

<div class="text-end mt-3">
	<?= form_submit('submit','Submit',['class'=>'btn btn-primary']) ?>
</div>
<?= form_close() ?>
<?= $this->endSection() ?>