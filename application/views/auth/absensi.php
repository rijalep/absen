<div class="container">
    <h1>
        <center>DAFTAR PRESENSI</center>
    </h1>
    <table class="table table-striped" id="tabel">
        <thead>
            <tr>
                <th scope="col">TANGGAL HADIR</th>
                <th scope="col">NAMA SISWA</th>
                <th scope="col">KELAS</th>
            </tr>
        </thead>
        <?php
        $count = 0;
        foreach ($absensi as $row) :
            $count++;
        ?>
            <tr>
                <td><?php echo date_indo($row->tgl_hadir); ?></td>
                <td><?php echo $row->nama_siswa; ?></td>
                <td><?php echo $row->kelas; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
<center>
    <div class="btn-group" role="group" aria-label="Basic example">
            <a href="<?php echo site_url('auth/registration'); ?>"><button class="btn btn-warning btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Buat Admin Baru"><i class="fa fa-address-card-o" aria-hidden="true"></i> Buat Admin Baru</button></a>
            <a href="<?php echo site_url('auth'); ?>"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Log Out"><i class="fa fa-address-card-o" aria-hidden="true"></i> Log Out</button></a>
            <a href="<?php echo site_url('siswa/siswa'); ?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Data Siswa"><i class="fa fa-address-card-o" aria-hidden="true"></i> Data Siswa</button></a>
            <a href="<?php echo site_url('../absensi'); ?>" target="_blank"><button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Link Presensi Siswa"><i class="fa fa-address-card-o" aria-hidden="true"></i> Link Presensi Siswa</button></a>
    </div>
</center>

</div>
<!-- load jquery js file -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<!-- /.container-fluid -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
<br><br>
<footer>
    <div class="container text-center">
        <div class="col-sm-12">
            <p>&copy; copyright 2021 | author <a href="http://instagram.com/rizalpirmansyah">Rizal Firmansyah</a>.</p>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>Buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>Buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url('assets/'); ?>JSZip/jszip.min.js"></script>
<script src="<?= base_url('assets/'); ?>pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/'); ?>pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/'); ?>Buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>Buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>dist/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tabel').DataTable({
            dom : 'Bfrtip',
            buttons : [
                'pdf','csv','excel','print','copy'
            ],
            "order": [[0, "desc"]],
            "scrollY": "300px",
            "scrollCollapse": true,
            "paging": false
        });
    });
</script>


</body>

</html>