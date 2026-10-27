<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
</head>
<body>

    <h1>Daftar Produk Makanan dan Minuman</h1>

    <?php
    $produk = [
        ["nama" => "Roti Cokelat", "harga" => 8000, "stok" => 20],
        ["nama" => "Susu UHT", "harga" => 7000, "stok" => 8],
        ["nama" => "Keripik Kentang", "harga" => 12000, "stok" => 0],
        ["nama" => "Air Mineral", "harga" => 4000, "stok" => 25],
        ["nama" => "Biskuit Keju", "harga" => 10000, "stok" => 4]
    ];
    ?>

    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Status</th>
        </tr>

        <?php foreach ($produk as $nomor => $p): ?>
            <tr>
                <td><?= $nomor + 1 ?></td>
                <td><?= $p["nama"] ?></td>
                <td>Rp <?= number_format($p["harga"], 0, ",", ".") ?></td>
                <td><?= $p["stok"] ?></td>
                <td>
                    <?php
                    if ($p["stok"] > 10) {
                        echo "Aman";
                    } elseif ($p["stok"] > 0) {
                        echo "Menipis";
                    } else {
                        echo "Habis";
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>