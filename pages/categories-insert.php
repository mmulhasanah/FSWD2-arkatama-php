<?php
include 'database.php';

if (isset($_POST['submit'])) {
    // ambil nilai input dari form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    // panggil fungsi insertCategory untuk memasukkan data ke dalam database
    $result = insertCategory($conn, $id, $name, $created_at, $updated_at);

    if ($result) {
        // jika berhasil, redirect ke halaman utama
        header('Location: categories.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
