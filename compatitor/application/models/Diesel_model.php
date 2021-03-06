<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Diesel_model extends CI_Model
{

    public $table = 'diesel';
    public $id = 'model';
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
        $this->db->like('model', $q);
    	$this->db->or_like('capacity', $q);
    	$this->db->or_like('center', $q);
    	$this->db->or_like('powertype', $q);
    	$this->db->or_like('operatorposition', $q);
        $this->db->or_like('tiretype', $q);
    	$this->db->or_like('maxforkheight', $q);
        $this->db->or_like('engine', $q);
        $this->db->or_like('ratedpower', $q);
        $this->db->or_like('ratedtorque', $q);
        $this->db->or_like('noofcylinder', $q);
        $this->db->or_like('piston', $q);
        $this->db->or_like('fueltank', $q);
        $this->db->or_like('transmission', $q);
        $this->db->or_like('stage', $q);
        $this->db->or_like('operating', $q);
        $this->db->or_like('travelling', $q);
        $this->db->or_like('lifting', $q);
        $this->db->or_like('lowering', $q);
        $this->db->or_like('gradeability', $q);
        $this->db->or_like('turning', $q);
        $this->db->or_like('tilt', $q);
        $this->db->or_like('noise', $q);
        $this->db->or_like('vehicle', $q);
        $this->db->or_like('overalllength', $q);
        $this->db->or_like('width', $q);
        $this->db->or_like('guardheight', $q);
        $this->db->or_like('tire', $q);
        $this->db->or_like('freeliftdua', $q);
        $this->db->or_like('freelift3', $q);
        $this->db->or_like('digital', $q);
        $this->db->or_like('feature', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('model', $q);
        $this->db->or_like('capacity', $q);
        $this->db->or_like('center', $q);
        $this->db->or_like('powertype', $q);
        $this->db->or_like('operatorposition', $q);
        $this->db->or_like('tiretype', $q);
        $this->db->or_like('maxforkheight', $q);
        $this->db->or_like('engine', $q);
        $this->db->or_like('ratedpower', $q);
        $this->db->or_like('ratedtorque', $q);
        $this->db->or_like('noofcylinder', $q);
        $this->db->or_like('piston', $q);
        $this->db->or_like('fueltank', $q);
        $this->db->or_like('transmission', $q);
        $this->db->or_like('stage', $q);
        $this->db->or_like('operating', $q);
        $this->db->or_like('travelling', $q);
        $this->db->or_like('lifting', $q);
        $this->db->or_like('lowering', $q);
        $this->db->or_like('gradeability', $q);
        $this->db->or_like('turning', $q);
        $this->db->or_like('tilt', $q);
        $this->db->or_like('noise', $q);
        $this->db->or_like('vehicle', $q);
        $this->db->or_like('overalllength', $q);
        $this->db->or_like('width', $q);
        $this->db->or_like('guardheight', $q);
        $this->db->or_like('tire', $q);
        $this->db->or_like('freeliftdua', $q);
        $this->db->or_like('freelift3', $q);
        $this->db->or_like('digital', $q);
        $this->db->or_like('feature', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

     function get_update($data,$where){
       $this->db->where($where);
       $this->db->update($this->table, $data);
       return TRUE;
    }

  
    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

     function create_data($data)
    {
        $this->db->insert($this->table, $data);
        if($this->db->affected_rows() > 0){
            return true;
        } else{
            return false;
        }
    }
        function valid_id($id)
    {
        $query = $this->db->get_where($this->table, array('model' => $id));
        if ($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }


}

/* End of file Buku_model.php */
/* Location: ./application/models/Buku_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-06 11:21:06 */
/* http://harviacode.com */