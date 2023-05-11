<?php
$hostname = 'localhost:3306';
$username = 'root';
$password     = '';
$database = 'arkatama_store';
// OOP
// $conn = new mysqli($hostname, $username, $pass);
// if ($conn->connect_error) {
 //   die('koneksi gagal: ' . $conn->connect_error);
// }//
// echo 'Koneksi Berhasil';

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($hostname, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);

// fungsi untuk memasukkan data kategori ke dalam database
function insertCategory($conn, $id, $name, $created_at, $updated_at)
{
    $sql = "INSERT INTO categories (id, name, created_at, updated_at)
            VALUES ('$id', '$name', '$created_at', '$updated_at')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

?>

