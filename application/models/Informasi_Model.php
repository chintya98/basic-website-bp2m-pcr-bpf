<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model {
    public $table = 'informasi';
    public $id = 'informasi.id';

    public function __construct(){
        parent::__construct();
    }

    // public function get(){
    //     $this->db->from($this->table);
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    public function get(){
        $this->db->select('i.*,k.kategori as nama');
        $this->db->from('informasi i');
        $this->db->join('kategori k', 'i.kategori = k.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id){
        $this->db->select('i.*,k.kategori as nama');
        $this->db->from('informasi i');
        $this->db->join('kategori k', 'i.kategori = k.id');
        $this->db->where('i.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data){
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete($id){
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function get_new(){
        $this->db->order_by('id', 'DESC');
        return $this->db->get('informasi',5);
    }

    public function get_informasiPenelitian(){   
        return $this->db->get_where('informasi',array('kategori'=>6));
        
    }

    public function get_informasiPengabdian(){   
        return $this->db->get_where('informasi',array('kategori'=>5));
        
    }

    public function tinfo()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}