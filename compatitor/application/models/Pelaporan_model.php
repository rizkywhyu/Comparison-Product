<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pelaporan_model extends CI_Model
{

    public $table = 'pelaporan';
    public $id = 'IdBarang';
    public $id2 = 'IdTanah';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('IdBarang', $q);
	$this->db->or_like('NamaBarang', $q);
	$this->db->or_like('Stok', $q);
	$this->db->or_like('KetTempat', $q);
	$this->db->or_like('KetKondisi', $q);
    $this->db->or_like('KetPemilik', $q);
	$this->db->or_like('TanggalMasuk', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('IdBarang', $q);
	$this->db->or_like('NamaBarang', $q);
	$this->db->or_like('Stok', $q);
	$this->db->or_like('KetTempat', $q);
	$this->db->or_like('KetKondisi', $q);
    $this->db->or_like('KetPemilik', $q);
	$this->db->or_like('TanggalMasuk', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }




    

}

/* End of file Buku_model.php */
/* Location: ./application/models/Buku_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-06 11:21:06 */
/* http://harviacode.com */