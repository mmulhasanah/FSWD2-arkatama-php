<!DOCTYPE html>
<html>

<head>
    <title>Input Kategori</title>
    <link rel="stylesheet" href="../assets/css/style-categories.css">
</head>

<body>
    <h1>Input Kategori</h1>

    <form action="categories-insert.php" method="POST">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">

        <label for="name">Nama:</label>
        <input type="text" name="name" id="name">

        <label for="created_at">Tanggal Buat:</label>
        <input type="datetime-local" name="created_at" id="created_at">

        <label for="updated_at">Tanggal Ubah:</label>
        <input type="datetime-local" name="updated_at" id="updated_at">

        <input type="submit" name="submit" value="Simpan">
    </form>

    <h1>Daftar Kategori</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal Buat</th>
                <th>Tanggal Ubah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'database.php';

            // query untuk menampilkan data kategori
            $sql = "SELECT * FROM categories";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['created_at'] . "</td>";
                    echo "<td>" . $row['updated_at'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data kategori.</td></tr>";
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