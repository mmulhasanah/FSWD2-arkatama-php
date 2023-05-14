<?php

include ('../inc/connect.php');

//get id 
$id_mahasiswa = $_GET['id'];
//dekripsi id
$id_mahasiswa = base64_decode($id_mahasiswa); 

$sql_mahasiswa    = "SELECT * from table_mahasiswa where id_mahasiswa='$id_mahasiswa'";
$result_mahasiswa = mysqli_query($connect,$sql_mahasiswa);
$data_mahasiswa   = mysqli_fetch_array($result_mahasiswa);

?>


<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>UPDATE DATA User</h2>
            </div>
            <!-- Input --> 
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FORM UPDATE DATA User
                            </h2>
                        </div>
                        <div class="body">
                           
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <form  method="POST" enctype="multipart/form-data" action="<?php echo $base_url; ?>/input/action_update_mahasiswa.php">
                                <input type="hidden"  name="id_mahasiswa"  value='<?php echo $id_mahasiswa; ?>' /> 

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM"  value='<?php echo $data_mahasiswa['nim'];?>' required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value='<?php echo $data_mahasiswa['nama'];?>' required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="prodi" placeholder="Masukkan Prodi" value='<?php echo $data_mahasiswa['prodi'];?>' required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="angkatan" placeholder="Masukkan Angkatan" value='<?php echo $data_mahasiswa['angkatan'];?>' required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <image height="100px" width="100px" src="<?php echo $base_url."/assets/photos/".$data_mahasiswa['photo']; ?>"> </image>
                                    </div>

                                    <div class="form-group">
										<input class="input-xxlarge" type="file" name="photo" />
                                    </div>
                                   
                                </div>
                                <div class="col-xs-4">
                                    <button class="btn btn-block bg-blue waves-effect" onclick="return confirm('Apakah anda yakin semua data sudah benar ?') " name=submit value="submit" type="submit">
                                    <i class="material-icons">update</i>
                                    UPDATE</button>
                                </div>
                                
                            </div>  
                            </form>

                        </div>
                    </div>
                </div>
            </div>
      

        </div>
    </section>