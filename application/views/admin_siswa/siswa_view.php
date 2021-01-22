<!-- Begin Page Content -->
<div class="container">
    <h1>
        <center>DAFTAR SISWA</center>
    </h1>
    <table class="table table-striped" id="tabel">
        <thead>
            <tr>
                <th scope="col">KELAS</th>
                <th scope="col">NAMA SISWA</th>
                <th scope="col">NO INDUK</th>
                <th scope="col" width="220px">KETERANGAN</th>
            </tr>
        </thead>
        <?php
        $count = 0;
        foreach ($siswa->result() as $row) :
            $count++;
        ?>
            <tr>
                <td><?php echo $row->kelas; ?></td>
                <td><?php echo $row->nama_siswa; ?></td>
                <th scope="row"><?php echo $row->no_induk; ?></th>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo site_url('siswa/get_edit/'. $row->no_induk); ?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
                            <a href="<?php echo site_url('siswa/delete/'. $row->no_induk); ?>"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
<center>
    <div class="btn-group" role="group" aria-label="Basic example">
            <a href="<?php echo site_url('absensi/absensi'); ?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-address-card-o" aria-hidden="true"></i> Kembali</button></a>
            <a href="<?php echo site_url('siswa/add_new'); ?>"><button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-user" aria-hidden="true"></i> Tambah Siswa</button></a>
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

<br><br>
<footer>
    <div class="container text-center">
        <div class="col-sm-12">
            <p>&copy; copyright 2021 | author <a href="http://instagram.com/rizalpirmansyah">Rizal Firmansyah</a>.</p>
        </div>
    </div>
</footer>

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
<script>
    $(document).ready(function() {
        $('#tabel').DataTable({
            "scrollY": "300px",
            "scrollCollapse": true,
            "paging": false
        });
    });
</script>
</body>

</html>