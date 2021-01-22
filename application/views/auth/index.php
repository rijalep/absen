<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .foto{
            width: 150px;
            margin-top: 40px;
        }
        .atas{
            margin-top: 0;
        }
        .tulisan{
            size: 2px;
        }
    </style>
</head>
<body>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <center><img class="foto" src="<?= base_url('assets/'); ?>img/smk.png" alt=""></center>
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <hr class="atas">
                                    <form class="user" method="post" action="<?= base_url('absensi/save'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="no_induk" name="no_induk" placeholder="Masukkan No Induk">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Presensi Sekarang   
                                        </button>

                                    </form>
                                <hr>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="<?php echo site_url('siswa/'); ?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Cek No Induk"><i class="fa fa-address-card-o" aria-hidden="true"></i> Cek No Induk</button></a>
                                        <a href="<?php echo site_url('auth/'); ?>"><button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Login Admin"><i class="fa fa-address-card-o" aria-hidden="true"></i> Login Admin</button></a>
                                        
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


<br><br>
<footer>
    <div class="container text-center">
        <div class="col-sm-12">
            <p>&copy; copyright 2021 | author <a href="http://instagram.com/rizalpirmansyah">Rizal Firmansyah</a>.</p>
        </div>
    </div>
</footer>

</body>
</html>