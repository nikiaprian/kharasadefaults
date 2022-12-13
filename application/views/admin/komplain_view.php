<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Komplain</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Komplain Penghuni</h6>
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th class="d-none">ID Komplain</th>
                            <th>Nama</th>
                            <th>Hunian</th>
                            <th>Perihal</th>
                            <th>Isi Komplain</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
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
                        foreach ($data_komplain as $row) :
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
                                <td>
                                    <!-- edit btn -->
                                    <button type="button" class="btn btn-success btn-circle btn-sm m-1 edit_data" title="Update Komplain" name="edit" value="edit" id="edit">
                                        <i class="fas fa-pen"></i>
                                    </button>

                                    <!-- delete btn -->
                                    <a href="<?= base_url('delete/komplainbyid/') . $row['id_komplain']; ?>" class="btn btn-danger btn-circle btn-sm m-1" onclick="return confirm('Anda yakin ingin menghapus data ini? Data yang dihapus tidak dapat dikembalikan!');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
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

<!-- update Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold" id="editJudul">Update Komplain</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detail_edit">

            </div>
        </div>
    </div>
</div>