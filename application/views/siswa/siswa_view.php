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
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
<br>
<center>
    <div class="btn-group" role="group" aria-label="Basic example">
            <a href="<?php echo site_url('absensi'); ?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-address-card-o" aria-hidden="true"></i> Kembali</button></a>
    </div>
</center>

</div>
<!-- load jquery js file -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<!-- /.container-fluid -->
<br><br>
<footer>
    <div class="container text-center">
        <div class="col-sm-12">
            <p>&copy; copyright 2021 | author <a href="http://instagram.com/rizalpirmansyah">Rizal Firmansyah</a>.</p>
        </div>
    </div>
</footer>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tabel').DataTable({
            "paging": false,
            "info": false,
            "scrollY": "300px",
            "scrollCollapse": true,
            "paging": false
        });
    });
</script>
</body>

</html>