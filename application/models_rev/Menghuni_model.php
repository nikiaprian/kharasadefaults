<?php defined('BASEPATH') or exit('No direct script access allowed');

class menghuni_model extends CI_Model
{
    public function getAllMenghuni()
    {
        $query = "SELECT kamar.nomor_kamar, pengguna.nama_pengguna, penghuni.tanggal_masuk, penghuni.id_menghuni, pengguna.id_pengguna FROM penghuni, kamar, pengguna WHERE penghuni.id_kamar = kamar.id_kamar AND penghuni.id_pengguna = pengguna.id_pengguna";

        return $this->db->query($query)->result_array();
    }

    public function getKamarTersedia()
    {
        $query = "SELECT kamar.nomor_kamar, kamar.id_kamar, 
                    CASE
                        WHEN kamar.id_kamar = (SELECT penghuni.id_kamar FROM penghuni WHERE penghuni.id_kamar = kamar.id_kamar)
                    THEN
                        (SELECT pengguna.nama_pengguna FROM pengguna, penghuni WHERE pengguna.id_pengguna = penghuni.id_pengguna AND  penghuni.id_kamar = kamar.id_kamar)
                    ELSE
                        'Belum dihuni'
                    END AS penghuni
                    
                FROM kamar";

        return $this->db->query($query)->result_array();
    }


    public function getBelumMenghuni()
    {
        $query = "SELECT pengguna.id_pengguna, pengguna.nama_pengguna
                FROM pengguna
                LEFT JOIN penghuni ON pengguna.id_pengguna = penghuni.id_pengguna
                WHERE penghuni.id_pengguna IS NULL AND pengguna.id_akses = 3";

        return $this->db->query($query)->result_array();
    }

    public function getMenghuniById($id_menghuni)
    {
        $query = "SELECT penghuni.id_menghuni, penghuni.tanggal_masuk, penghuni.tanggal_keluar, pengguna.nama_pengguna, kamar.id_kamar, kamar.nomor_kamar, tipe_kamar.nama_tipe, kamar.kapasitas_kamar, pengguna.id_pengguna, pengguna.nama_pengguna, pengguna.foto_pengguna, kamar.luas_kamar, kamar.lantai_kamar, layanan.nama_layanan, layanan.harga_bulanan AS harga_layanan, (kamar.harga_bulanan + layanan.harga_bulanan) AS harga_bulanan_total, kamar.denda, kamar.harga_bulanan, kamar.deskripsi_kamar FROM pengguna, kamar, penghuni, tipe_kamar, layanan WHERE pengguna.id_pengguna = penghuni.id_pengguna AND kamar.id_kamar = penghuni.id_kamar AND kamar.id_tipe = tipe_kamar.id_tipe AND kamar.id_layanan = layanan.id_layanan AND penghuni.id_menghuni = '$id_menghuni'";

        return $this->db->query($query)->row_array();
    }

    public function insertMenghuni($data)
    {
        return $this->db->insert('penghuni', $data);
    }

    public function getMenghuniByIdPengguna($id)
    {
        $this->db->where('id_pengguna', $id);
        return $this->db->get('penghuni')->row_array();
    }



    public function updateMenghuni($id_menghuni, $data)
    {
        $this->db->where('id_menghuni', $id_menghuni);
        return $this->db->update('menghuni', $data);
    }
}
