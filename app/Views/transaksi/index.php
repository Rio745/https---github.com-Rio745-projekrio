<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1>Transaction List</h1>

    <a href="<?= base_url('transaksi/create') ?>">Create New Transaction</a>
    
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Menu ID</th>
                <th>Customer ID</th>
                <th>Order Quantity</th>
                <th>Total Payment</th>
                <th>Transaction Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($transaksi) && is_array($transaksi)): ?>
                <?php foreach ($transaksi as $item): ?>
                    <tr>
                        <td><?= esc($item['id']) ?></td>
                        <td><?= esc($item['id_menu']) ?></td>
                        <td><?= esc($item['id_pelanggan']) ?></td>
                        <td><?= esc($item['jumlah_pesanan']) ?></td>
                        <td><?= esc($item['total_bayar']) ?></td>
                        <td><?= esc($item['tgl_transaksi']) ?></td>
                        <td>
                            <a href="<?= base_url('transaksi/edit/' . $item['id']) ?>">Edit</a>
                            <a href="<?= base_url('transaksi/delete/' . $item['id']) ?>" onclick="return confirm('Are you sure you want to delete this transaction?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No transactions found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
