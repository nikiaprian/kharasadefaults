<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengeluaran_model extends CI_Model
{

    public function getAllPengeluaran()
    {
        $this->db->select('pengeluaran.*, jenis_pengeluaran.kategori_pengeluaran, jenis_pengeluaran.nama_pengeluaran');
        $this->db->from('pengeluaran');
        $this->db->join('jenis_pengeluaran', 'pengeluaran.id_jenis_pengeluaran = jenis_pengeluaran.id_jenis_pengeluaran');
        $this->db->order_by('pengeluaran.tanggal_pengeluaran', 'desc');

        return $this->db->get()->result_array();
    }

    public function getAllJenisPengeluaran()
    {
        return $this->db->get('jenis_pengeluaran')->result_array();
    }

    public function getPengeluaranById($id)
    {

        $this->db->select('*');
        $this->db->from('pengeluaran');
        $this->db->join('jenis_pengeluaran', 'pengeluaran.id_jenis_pengeluaran = jenis_pengeluaran.id_jenis_pengeluaran');
        $this->db->where('id_pengeluaran', $id);

        return $this->db->get()->row_array();
    }

    public function inputPengeluaran($data)
    {
        return $this->db->insert('pengeluaran', $data);
    }

    public function updatePengeluaran($id, $data)
    {
        $this->db->where('id_pengeluaran', $id);
        return $this->db->update('pengeluaran', $data);
    }
}
