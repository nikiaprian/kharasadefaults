<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function getUserByEmail($email)
    {
        $user = $this->db->get_where('pengguna', ['email_pengguna' => $email])->row_array();

        return $user;
    }

    public function getHakAksesById($id_akses)
    {
        $hak_akses = $this->db->get_where('hak_akses', ['id_akses' => $id_akses])->row_array();

        return $hak_akses;
    }

    public function getAllPenghuni()
    {
        $this->db->select('pengguna.id_pengguna, pengguna.nama_pengguna, menghuni.id_kamar, menghuni.tanggal_masuk, pengguna.telepon_pengguna, kamar.nomor_kamar');
        $this->db->from('pengguna');
        $this->db->join('menghuni', 'pengguna.id_pengguna = menghuni.id_pengguna');
        $this->db->join('kamar', 'menghuni.id_kamar = kamar.id_kamar');
        $this->db->order_by('kamar.nomor_kamar', 'asc');

        $penghuni = $this->db->get()->result_array();

        return $penghuni;
    }

    public function getAllKomplain()
    {
        $this->db->select('komplain.id_komplain, pengguna.nama_pengguna, menghuni.id_kamar, komplain.perihal, komplain.isi, komplain.tanggal_komplain, kamar.nomor_kamar, status_komplain.name_status');
        $this->db->from('komplain');
        $this->db->join('menghuni', 'komplain.id_pengguna = menghuni.id_pengguna');
        $this->db->join('pengguna', 'komplain.id_pengguna = pengguna.id_pengguna');
        $this->db->join('kamar', 'menghuni.id_kamar = kamar.id_kamar');
        $this->db->join('status_komplain', 'komplain.status_komplain = status_komplain.id');
        $this->db->order_by('komplain.id_komplain', 'desc');

        $data_komplain = $this->db->get()->result_array();

        return $data_komplain;
    }

    function getKomplainId()
    {
        $this->db->select('komplain.id_komplain, pengguna.nama_pengguna, menghuni.id_kamar, komplain.perihal, komplain.isi, komplain.tanggal_komplain, kamar.nomor_kamar, status_komplain.name_status');
        $this->db->from('komplain');
        $this->db->join('menghuni', 'komplain.id_pengguna = menghuni.id_pengguna');
        $this->db->join('pengguna', 'komplain.id_pengguna = pengguna.id_pengguna');
        $this->db->join('kamar', 'menghuni.id_kamar = kamar.id_kamar');
        $this->db->join('status_komplain', 'komplain.status_komplain = status_komplain.id');
        $this->db->where('komplain.id_pengguna', $this->session->userdata('id_pengguna'));

        $data_komplain = $this->db->get()->result_array();

        return $data_komplain;
    }

    public function getKomplainUser($id_pengguna)
    {
        $query = "SELECT * FROM pengguna, kamar, menghuni
    WHERE menghuni.id_kamar = kamar.id_kamar AND menghuni.id_pengguna = pengguna.id_pengguna AND pengguna.id_pengguna = $id_pengguna";
        return $this->db->query($query)->row_array();
    }

    function getAllReview()
    {
        $this->db->select('review_table.review_id, review_table.user_name, review_table.user_rating, review_table.user_review, review_table.datetime');
        $this->db->from('review_table');
        $this->db->order_by('review_table.review_id', 'desc');

        $data_review = $this->db->get()->result_array();

        return $data_review;
    }

    public function getReviewUser($id_pengguna)
    {
        $query = "SELECT * FROM pengguna, kamar, menghuni
    WHERE menghuni.id_kamar = kamar.id_kamar AND menghuni.id_pengguna = pengguna.id_pengguna AND pengguna.id_pengguna = $id_pengguna";
        return $this->db->query($query)->row_array();
    }

    function insert($data)
    {
        $this->db->insert('komplain', $data);
    }

    function insertReview($data)
    {
        $this->db->insert('review_table', $data);
    }

    // mengambil data jenis status komplain
    public function getAllStatusKomplain()
    {
        return $this->db->get('status_komplain')->result_array();
    }

    public function getUserById($id)
    {
        $user = $this->db->get_where('pengguna', ['id_pengguna' => $id])->row_array();

        return $user;
    }

    public function getKomplainById($id)
    {
        $komplain = $this->db->get_where('komplain', ['id_komplain' => $id])->row_array();

        return $komplain;
    }

    public function updateUser($id, $data)
    {
        $this->db->where('id_pengguna', $id);
        $this->db->update('pengguna', $data);
    }
}
