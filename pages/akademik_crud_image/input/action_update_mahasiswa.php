
<?php

include ('../inc/connect.php');
 

$id_mahasiswa = $_POST['id_mahasiswa'];
$nim	      = $_POST['nim'];
$nama         = $_POST['nama'];
$prodi        = $_POST['prodi'];
$angkatan     = $_POST['angkatan'];

//image
$photo      = $_FILES['photo']['name'];
$photo_tmp  = $_FILES['photo']['tmp_name'];
$photo_size = $_FILES['photo']['size'];

// Rename image
$update_photo 	= date('dmYHis')."-Akademik-".$photo;


if (isset($_POST['submit'])){


    if (!empty($photo))
    {

    //remove old photo first
    $sql_photo    = "SELECT * from table_mahasiswa where id_mahasiswa='$id_mahasiswa' ";
    $result_photo = mysqli_query($connect,$sql_photo);
    $data_photo   = mysqli_fetch_array($result_photo);

    #path
    $path = $_SERVER['DOCUMENT_ROOT'] . '/akademik_crud_image/assets/photos/'.$data_photo['photo'];
    //echo "hasil: ".$path;
    chmod($path,777);
    unlink($path);


    //update database
    $sql        = "UPDATE table_mahasiswa set  nim ='$nim',nama='$nama',prodi='$prodi',angkatan='$angkatan', photo='$update_photo' WHERE id_mahasiswa='$id_mahasiswa' ";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));

    //upload to folder
    $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/akademik_crud_image/assets/photos/';
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile . $update_photo);
    //echo $uploadfile.$new_photo;

    }

    else
    {

    //update database
    $sql        = "UPDATE table_mahasiswa set  nim ='$nim',nama='$nama',prodi='$prodi',angkatan='$angkatan' WHERE id_mahasiswa='$id_mahasiswa' ";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));


    }


    echo '<script language="javascript"> location.href ="'.$base_url.'/data-mahasiswa/message/success_update"; </script>';


}

else

{


}



?>
