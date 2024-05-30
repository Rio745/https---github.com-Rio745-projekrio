<?= $this->extend('dashboard1') ?>
<?= $this->section('content') ?>
<h1>Semua Menu</h1>
<br>
<h5 class="mb-6" style="color: blue;">Selamat Datang Admin</h5>
<a href="<?= base_url("menu/create")?>" class="btn btn-dark mt-3 mb-3">Tambah Menu</a>
<table class="table table-border border-dark">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Menu</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($menus as $key => $menu) : ?>
        <tr>
            <td class="align-middle"><?= $key + 1 ?></td>
            <td class="align-middle"><?= $menu->nama ?></td>
            <td class="align-middle"><?= $menu->jenis_menu ?></td>
            <td class="align-middle"><?= $menu->harga ?></td>
            <td class="text-center"><img height="100px" src="<?=base_url('uploads/'.$menu->gambar) ?>"></td>
            <td class="text-center align-middle">
                <a href="<?= base_url('menu/update/' .$menu->id) ?>" class="btn btn-success">Edit</a>
                <a href="<?= base_url('menu/delete/' .$menu->id) ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>