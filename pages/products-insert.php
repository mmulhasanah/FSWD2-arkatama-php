<?php
include 'database.php';

// ambil data dari form
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$status = $_POST['status'];

// query untuk menambahkan data produk
$sql = "INSERT INTO products (id, name, description, price, status) VALUES ('$id', '$name', '$description', '$price', '$status')";

if ($conn->query($sql) === true) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();