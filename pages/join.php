<!DOCTYPE html>
<html>

<head>
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="../assets/css/style-join.css">
</head>

<body class="container">
    <h1>Selamat datang di Halaman Utama</h1>

    <a href="categories.php"><button>Kategori</button></a>
    <a href="products.php"><button>Produk</button></a>

    <h2>Daftar Kategori dan Produk</h2>

    <?php include 'database.php'; ?>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // query untuk join antara tabel categories dan products
            $sql = "SELECT categories.id AS category_id, categories.name AS category_name, products.id AS product_id, products.name AS product_name, products.description, products.price, products.status FROM categories INNER JOIN products ON categories.id = products.category_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $counter = 1; // inisialisasi counter
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $counter . "</td>"; // menampilkan nomor urut
                    echo "<td>" . $row['category_id'] . "</td>";
                    echo "<td>" . $row['category_name'] . "</td>";
                    echo "<td>" . $row['product_id'] . "</td>";
                    echo "<td>" . $row['product_name'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "</tr>";
                    $counter++; // increment counter
                }
            } else {
                echo "<tr><td colspan='8'>Tidak ada data kategori dan produk.</td></tr>";
            }

            $conn->close();

            ?>
        </tbody>
    </table>
</body>

</html>