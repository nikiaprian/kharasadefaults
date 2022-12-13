<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Review Page</h1>
    <h6 class="m-0 font-weight-bold text-primary">Terima kasih telah menggunakan jasa Kharasa House! Silahkan berikan testimoni terbaikmu, testimonimu sangat berarti bagi kami untuk terus memberikan yang terbaik.</h6>
    <br>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button class="btn btn-sm btn-primary btn-icon-split float-right" data-toggle="modal" data-target="#tambahReview">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Review</span>
            </button>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message') ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="d-none">ID Review</th>
                            <th>Nama</th>
                            <th>Rating</th>
                            <th>Review</th>
                            <th>Tanggal Review</th>
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
                        foreach ($user_review as $row) :
                        ?>
                            <tr>
                                <td class="d-none"><?= $row['review_id']; ?></td>
                                <td><?= $row['user_name']; ?></td>
                                <td><?= $row['user_rating'] . ' / 5'; ?></td>
                                <td><?= $row['user_review']; ?></td>
                                <td><?= $row['datetime']; ?></td>
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
<div class="modal fade" id="tambahReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold" id="exampleModalCenterTitle">Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('user/saveReview'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body d-flex justify-content-center">
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="5"> <b>Sangat Puas</b>
                        </label>
                        <hr>
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="4"> <b>Puas</b>
                        </label>
                        <hr>
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="3"> <b>Cukup</b>
                        </label>
                        <hr>
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="2"> <b>Tidak Puas</b>
                        </label>
                        <hr>
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="1"> <b>Sangat Tidak Puas</b>
                        </label>
                    </div>
                    <div class="form-group">
                        <input value="<?php echo $review['nama_pengguna']; ?>" type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" readonly />
                    </div>
                    <div class="form-group">
                        <textarea name="user_review" id="user_review" class="form-control" rows="3" placeholder="Type Review Here"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submitReview" class="btn btn-primary" onclick="return confirm('Anda yakin ingin mengirim review?');">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>