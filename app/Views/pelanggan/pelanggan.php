<?= $this->extend('dashboard1') ?>
<?= $this->section('content') ?>
    <h1>Daftar Pelanggan</h1>
    <a href="<?= base_url("pelanggan/create")?>" class="btn btn-dark mt-3 mb-3">Tambah Pelanggan</a>
    <table class="table table-bordered border-dark">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No. HP</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($pelanggan as $key => $plg) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $plg->nama ?></td>
                <td><?= $plg->jk ?></td>
                <td><?= $plg->alamat ?></td>
                <td><?= $plg->no_hp ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
