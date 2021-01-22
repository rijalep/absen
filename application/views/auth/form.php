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
                                    Terima kasih kepada
                                    <br>
                                    <b><?= $nama_siswa;?></b>
                                    <br>
                                    <b><?= $kelas;?></b>
                                    <br>
                                    yang telah melakukan presensi pada <b><?= date_indo("Y-m-d");?></b>

                                <hr>
                                    <a href="<?php echo site_url('absensi/'); ?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-address-card-o" aria-hidden="true"></i> Kembali</button></a>
                                    <br><br>
                                    Nb : Screenshoot apabila membutuhkan bukti
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