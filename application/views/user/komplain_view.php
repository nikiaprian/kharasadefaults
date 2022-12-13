<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Komplain</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button class="btn btn-sm btn-primary btn-icon-split float-right" data-toggle="modal" data-target="#tambahKomplain">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Komplain</span>
            </button>
            <h6 class="m-0 font-weight-bold text-primary">Daftar Komplain</h6>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message') ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="d-none">ID Komplain</th>
                            <th>Nama</th>
                            <th>Hunian</th>
                            <th>Perihal</th>
                            <th>Isi Komplain</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //   $query = "SELECT pengguna.id_pengguna, pengguna.nama_pengguna, menghuni.id_kamar, menghuni.tanggal_masuk, pengguna.telepon_pengguna, kamar.nomor_kamar
                        //   FROM pengguna
                        //     INNER JOIN menghuni ON pengguna.id_pengguna = menghuni.id_pengguna 
                        //     INNER JOIN kamar ON kamar.id_kamar = menghuni.id_kamar
                        //     ORDER BY kamar.nomor_kamar ASC";
                        //   $hasil = mysqli_query($conn, $query);
                        //   $no = 1;

                        //   while ($data_penghuni = mysqli_fetch_array($hasil)) {
                        $no = 1;
                        foreach ($komplain_user as $row) :
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td class="d-none"><?= $row['id_komplain']; ?></td>
                                <td><?= $row['nama_pengguna']; ?></td>
                                <td><?= $row['nomor_kamar']; ?></td>
                                <td><?= $row['perihal']; ?></td>
                                <td><?= $row['isi']; ?></td>
                                <td><?= $row['name_status']; ?></td>
                                <td><?= $row['tanggal_komplain']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<!-- Modal komplain -->
<div class="modal fade" id="tambahKomplain" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold" id="exampleModalCenterTitle">Komplain</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('user/saveKomplain'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="hunian">Hunian</label>
                        <input value="<?php echo $komplain['nomor_kamar']; ?>" type="text" class="form-control" id="hunian" name="hunian" aria-describedby="hunian" placeholder="Masukkan hunian" required>
                    </div>
                    <div class="form-group">
                        <label for="perihal">Perihal</label>
                        <input value="" type="text" class="form-control" id="perihal" name="perihal" aria-describedby="perihal" placeholder="Masukkan perihal" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea value="" type="text" class="form-control" id="keterangan" name="keterangan" aria-describedby="keterangan" placeholder="Masukkan Komplain" rows="3" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submitKomplain" class="btn btn-primary" onclick="return confirm('Anda yakin ingin mengirim komplain?');">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>