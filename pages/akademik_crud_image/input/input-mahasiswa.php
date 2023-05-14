<?php

include ('../inc/connect.php');

?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>INPUT DATA MAHASISWA</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FORM INPUT DATA MAHASISWA
                            </h2>
                        </div>
                        <div class="body">
                           
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <form  method="POST" enctype="multipart/form-data" action="<?php echo $base_url; ?>/input/action_mahasiswa.php">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM"  required autofocus />
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="prodi" placeholder="Masukkan Prodi" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="angkatan" placeholder="Masukkan Angkatan" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <image height="100px" width="100px" src="<?php echo $base_url."/assets/images/noimage.png"; ?>"> </image>
                                    </div>

                                    <div class="form-group">
										<input class="input-xxlarge" type="file" name="photo" required />
                                    </div>
                                    
                                    <div class="col-xs-4">
                                        <button class="btn btn-block bg-blue waves-effect" onclick="return confirm('Apakah anda yakin semua data sudah benar ?') " name=submit value="submit" type="submit">
                                        <i class="material-icons">send</i>
                                        SUBMIT</button>
                                    </div>
                                
                            </div>  
                            </form>

                        </div>
                    </div>
                </div>
            </div>
      

        </div>
    </section>