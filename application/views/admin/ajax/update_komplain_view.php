<!doctype html>
<html lang="en">
<?php
// $id_menghuni = $_POST['id_menghuni'];
// $query = "SELECT * FROM menghuni, pengguna, kamar WHERE id_menghuni = $id_menghuni AND menghuni.id_pengguna = pengguna.id_pengguna AND kamar.id_kamar = menghuni.id_kamar";        

?>
<form action="<?= base_url('update/updateKomplain'); ?>" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $komplain['id_komplain']; ?>">
  <input type="hidden" name="penghuni" value="<?php echo $komplain['id_pengguna']; ?>">
  <div class="form-group">
    <div class="form-group">
      <label for="tanggal">Tanggal Komplain</label>
      <input type="date" value="<?php echo $komplain['tanggal_komplain'] ?>" class="form-control" id="tanggal" name="tanggal" aria-describedby="tanggal" placeholder="Masukkan Tanggal Komplain" required>
    </div>
    <label for="">Penghuni</label>
    <input value="<?php echo $komplain['nama_pengguna']; ?>" type="text" class="form-control" id="" name="" aria-describedby="" placeholder="Masukkan Nama Penghuni" required>
  </div>
  <div class="form-group">
    <label for="hunian">No. Hunian</label>
    <input value="<?php echo $komplain['id_kamar']; ?>" type="text" class="form-control" id="hunian" name="hunian" aria-describedby="hunian" placeholder="Masukkan hunian" required>
  </div>
  <div class="form-group">
    <label for="perihal">Perihal</label>
    <input value="<?php echo $komplain['perihal']; ?>" type="text" class="form-control" id="perihal" name="perihal" aria-describedby="perihal" placeholder="Masukkan perihal" required>
  </div>
  <div class="form-group">
    <label for="keterangan">Keterangan</label>
    <input value="<?php echo $komplain['isi']; ?>" type="text" class="form-control" id="keterangan" name="keterangan" aria-describedby="keterangan" placeholder="Masukkan keterangan" required>
  </div>
  <div class="form-group">
    <label for="status">Status Komplain</label>
    <select name="status" class="form-control" id="status" required>
      <option selected disabled value="">Pilih Status Komplain</option>

      <?php
      foreach ($status_komplain as $row) {
        if ($row['id'] == $komplain['status_komplain']) {
      ?>

          <option selected value="<?php echo $row['id']; ?>">
            <?php echo strtoupper($row['name_status']); ?></option>

        <?php } else { ?>

          <option value="<?php echo $row['id']; ?>">
            <?php echo strtoupper($row['name_status']); ?></option>

      <?php
        }
      }
      ?>
    </select>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
    <button type="submit" name="update_komplain" class="btn btn-primary" onclick="return confirm('Anda yakin ingin mengupdate data?');">Update</button>
  </div>
</form>
<?php

?>

</html>