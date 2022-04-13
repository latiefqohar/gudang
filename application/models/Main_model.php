<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

    // fungsi untuk mengambil data dari database
    function get_data($table){
        return $this->db->get($table);
    }
    // fungsi untuk menginput data ke database
    function insert_data($data,$table){
        $this->db->insert($table,$data);
    }
    // fungsi untuk mengedit data
    function find_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    // fungsi untuk menghapus data dari database
    function delete_data($where,$table){
        $this->db->delete($table,$where);
    }
    // fungsi untuk mengupdate atau mengubah data di database
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    

}

/* End of file Main_model.php */


?>