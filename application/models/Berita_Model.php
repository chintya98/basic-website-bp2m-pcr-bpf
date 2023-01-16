<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {
    public $table = 'berita';
    public $id = 'berita.id';

    public function __construct(){
        parent::__construct();
    }

    // public function get(){
    //     $this->db->from($this->table);
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    public function get(){
        $this->db->select('b.*,k.kategori as nama');
        $this->db->from('berita b');
        $this->db->join('kategori k', 'b.kategori = k.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id){
        $this->db->select('b.*,k.kategori as nama');
        $this->db->from('berita b');
        $this->db->join('kategori k', 'b.kategori = k.id');
        $this->db->where('b.id', $id);
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
        return $this->db->get('berita',5);
    }
    
    public function get_topPenelitian(){
        $this->db->order_by('id', 'DESC');
        return $this->db->get_where('berita',array('kategori'=>6),1);
    }

    public function get_topPengabdian(){
        $this->db->order_by('id', 'DESC');
        return $this->db->get_where('berita',array('kategori'=>5),1);
    }

    public function get_beritaPenelitian(){   
        $this->db->order_by('id', 'DESC');
        return $this->db->get_where('berita',array('kategori'=>6));
        
    }

    public function get_beritaPengabdian(){   
        return $this->db->get_where('berita',array('kategori'=>5));
        
    }

    public function tberita()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
    
}