<!DOCTYPE html>
<html>

<head>
    <title>Input Produk</title>
    <link rel="stylesheet" href="../assets/css/style-products.css">
</head>

<body>
    <h1>Input Produk</h1>

    <form action="products-insert.php" method="POST">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">

        <label for="name">Nama:</label>
        <input type="text" name="name" id="name">

        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description"></textarea>

        <label for="price">Harga:</label>
        <input type="text" name="price" id="price">

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="1">Aktif</option>
            <option value="0">Tidak Aktif</option>
        </select>

        <input type="submit" name="submit" value="Simpan">

    </form>

    <h1>Daftar Produk</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'database.php';

            // query untuk menampilkan data produk
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . ($row['status'] ? 'Aktif' : 'Tidak Aktif') . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data produk.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
    <div>
        <a href="join.php">Kembali ke Halaman Utama</a>
    </div>
</body>

</html>