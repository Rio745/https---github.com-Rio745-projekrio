<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1>Create Transaction</h1>

    <?= \Config\Services::validation()->listErrors() ?>

    <form action="<?= base_url('transaksi/create') ?>" method="post">
        <?= csrf_field() ?>

        <label for="id_menu">Menu ID</label>
        <input type="text" name="id_menu" id="id_menu"><br>

        <label for="id_pelanggan">Customer ID</label>
        <input type="text" name="id_pelanggan" id="id_pelanggan"><br>

        <label for="jumlah_pesanan">Order Quantity</label>
        <input type="text" name="jumlah_pesanan" id="jumlah_pesanan"><br>

        <label for="total_bayar">Total Payment</label>
        <input type="text" name="total_bayar" id="total_bayar"><br>

        <label for="tgl_transaksi">Transaction Date</label>
        <input type="text" name="tgl_transaksi" id="tgl_transaksi"><br>

        <input type="submit" value="Create">
    </form>
<?= $this->endSection() ?>
