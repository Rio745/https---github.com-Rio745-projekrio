<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1>Edit Transaction</h1>

    <?= \Config\Services::validation()->listErrors() ?>

    <form action="<?= base_url('transaksi/edit/' . $transaksi['id']) ?>" method="post">
        <?= csrf_field() ?>

        <label for="id_menu">Menu ID</label>
        <input type="text" name="id_menu" id="id_menu" value="<?= esc($transaksi['id_menu']) ?>"><br>

        <label for="id_pelanggan">Customer ID</label>
        <input type="text" name="id_pelanggan" id="id_pelanggan" value="<?= esc($transaksi['id_pelanggan']) ?>"><br>

        <label for="jumlah_pesanan">Order Quantity</label>
        <input type="text" name="jumlah_pesanan" id="jumlah_pesanan" value="<?= esc($transaksi['jumlah_pesanan']) ?>"><br>

        <label for="total_bayar">Total Payment</label>
        <input type="text" name="total_bayar" id="total_bayar" value="<?= esc($transaksi['total_bayar']) ?>"><br>

        <label for="tgl_transaksi">Transaction Date</label>
        <input type="text" name="tgl_transaksi" id="tgl_transaksi" value="<?= esc($transaksi['tgl_transaksi']) ?>"><br>

        <input type="submit" value="Update">
    </form>
<?= $this->endSection() ?>
