<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Memastikan database di-load
    }

    // Ambil semua data siswa
    public function get_all_siswa()
    {
        $query = $this->db->get('siswa');
        return ($query->num_rows() > 0) ? $query->result_array() : [];
    }
    
    public function get_siswa_pagination($limit, $start)
{
    $this->db->limit($limit, $start);
    $query = $this->db->get('siswa');
    return ($query->num_rows() > 0) ? $query->result_array() : [];
}

public function get_total_siswa()
{
    return $this->db->count_all('siswa');
}

    // Tambah siswa ke database
    public function insert_siswa($data)
    {
        if ($this->db->insert('siswa', $data)) {
            return $this->db->insert_id(); // Mengembalikan ID yang baru ditambahkan
        }
        return false;
    }

    // Ambil satu data siswa berdasarkan ID
    public function get_siswa_by_id($id)
    {
        $query = $this->db->get_where('siswa', ['id' => $id]);
        return ($query->num_rows() > 0) ? $query->row_array() : null;
    }

    // Update data siswa berdasarkan ID
    public function update_siswa($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('siswa', $data);
    }

    // Hapus siswa berdasarkan ID
    public function delete_siswa($id)
    {
        return $this->db->delete('siswa', ['id' => $id]);
    }
}
