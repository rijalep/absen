<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Edit Siswa</h1>
                                </div>
                                <form class="user" method="post" action="<?= base_url('siswa/update'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="no_induk" value="<?= $no_induk?>" placeholder="Masukkan No Induk" readonly>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="nama_siswa" value="<?= $nama_siswa?>" placeholder="Enter Nama">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="kelas" value="<?= $kelas?>" placeholder="Masukkan Kelas">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Edit Siswa
                                    </button>

                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- load jquery js file -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</div>
<!-- Footer -->
<br><br>
<footer>
    <div class="container text-center">
        <div class="col-sm-12">
            <p>&copy; copyright 2021 | author <a href="http://instagram.com/rizalpirmansyah">Rizal Firmansyah</a>.</p>
        </div>
    </div>
</footer>

<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>