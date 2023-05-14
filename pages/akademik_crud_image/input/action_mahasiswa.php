
<?php

include ('../inc/connect.php');
date_default_timezone_set('Asia/Makassar');

$nim	    = $_POST['nim'];
$nama       = $_POST['nama'];
$prodi      = $_POST['prodi'];
$angkatan   = $_POST['angkatan'];

//image
$photo      = $_FILES['photo']['name'];
$photo_tmp  = $_FILES['photo']['tmp_name'];
$photo_size = $_FILES['photo']['size'];

// Rename image
$new_photo 	= date('dmYHis')."-Akademik-".$photo;


if (isset($_POST['submit'])){

//insert into database
$sql        = "INSERT INTO table_mahasiswa (nim,nama,prodi,angkatan,photo) values ('$nim','$nama','$prodi','$angkatan','$new_photo') ";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

//upload to folder
$uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/akademik_crud_image/assets/photos/';
move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile . $new_photo);
//echo $uploadfile.$new_photo;


echo '<script language="javascript"> location.href ="'.$base_url.'/data-mahasiswa/message/success"; </script>';


}

else

{


}



?>
