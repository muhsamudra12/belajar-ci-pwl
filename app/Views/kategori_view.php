<!DOCTYPE html>
<html>
<head>
    <title>Kategori Alat Tulis</title>
</head>
<body>
    <h1>Kategori Alat Tulis Kantor</h1>
    <ul>
        <?php foreach ($items as $item): ?>
            <li>
                <a href="<?= base_url('produk/' . esc($item['slug'])) ?>">
                    <?= ($item['nama']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
