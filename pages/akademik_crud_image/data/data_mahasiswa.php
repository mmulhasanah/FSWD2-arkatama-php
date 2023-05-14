<?php
include ('../inc/connect.php');

if (isset($_GET['id']))
{
    $id_delete = $_GET['id'];
    $id_delete = base64_decode($id_delete); 
   
    //data mahasiswa
    $sql_mahasiswa    = "SELECT * from table_mahasiswa where id_mahasiswa='$id_delete'";
    $result_mahasiswa = mysqli_query($connect,$sql_mahasiswa);
    $data_mahasiswa   = mysqli_fetch_array($result_mahasiswa);

    #path
    $path = $_SERVER['DOCUMENT_ROOT'] . '/akademik_crud_image/assets/photos/'.$data_mahasiswa['photo'];
    //echo "hasil: ".$path;
    chmod($path,777);
    unlink($path);
    //unlink('images/'.$file['picture']);

    //remove
    mysqli_query($connect,"delete from table_mahasiswa where id_mahasiswa='$id_delete'");

}
 
?>


<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA MAHASISWA  </h2>
            </div>
            <span><a href="<?php echo $base_url; ?>/input-mahasiswa" class="btn bg-blue waves-effect"><i class="material-icons">add</i>Tambah Data</a></span><br><br>

        </div>
					<?php


                    if ($_GET['msg']=="success")
                        {

					    echo '
						<div class="alert alert-success alert-dismissable">
						<i class="fa fa-check"></i>
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<b>SUKSES ! </b> Menambah Data Mahasiswa .
						</div>';
					    }
					else if ($_GET['msg']=="success_update")
						{
                        echo '
						<div class="alert alert-success alert-dismissable">
						<i class="fa fa-check"></i>
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<b>SUKSES ! </b> Mengedit Data User .
						</div>';
						}
					else
						{

                        }
                    
                        if ($_GET['id']!="")
                        {
					    echo '
						<div class="alert alert-success alert-dismissable">
						<i class="fa fa-check"></i>
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<b>SUKSES ! </b> Menghapus data .
                        </div>';
                        }
                        
                    
                    ?>
						
					

        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Table Mahasiswa
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Nim</th>
											<th>Nama</th>
                                            <th>Prodi</th>
                                            <th>Angkatan</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                     <?php
										$no     =1;
                                        $sql    = "SELECT * from table_mahasiswa ";
                                        $result = mysqli_query($connect,$sql);
                                        while ($data =mysqli_fetch_array($result))
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td>
                                            <?php
                                            if (!empty($data['photo']))
                                            {
                                                $photo = $data['photo'];
                                                echo  "<image height='100px' width='100px' src='".$base_url."/assets/photos/".$photo."'> </image>";
                                            }
                                            else 
                                            {
                                                echo  "<image height='100px' width='100px' src='".$base_url."/assets/images/noimage.png'; ?> </image>";

                                            }
                                            ?>

                                                
                                            </td>
                                            <td><?php echo $data['nim'];?></td>
                                            <td><?php echo $data['nim'];?></td>
											<td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['prodi'];?></td>
                                            <td><?php echo $data['angkatan'];?></td>
                                            <td>
                                            <?php 
                                            //enkripsi id
                                            $id_mahasiswa = base64_encode($data['id_mahasiswa']);

                                            ?>
                                              <span><a href="<?php echo $base_url ?>/update-mahasiswa/<?php echo $id_mahasiswa;?>" class="btn bg-blue waves-effect"><i class="material-icons">mode_edit</i>Edit</a></span>

                                              <span><a href="<?php echo $base_url ?>/data-mahasiswa/delete/<?php echo $id_mahasiswa;?>" class="btn bg-red waves-effect" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?') " ><i class="material-icons">delete</i>Delete</a></span>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>