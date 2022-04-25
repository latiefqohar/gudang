<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id")) {
            redirect('login','refresh');
        }
    }
    

    public function index()
    {
        $permintaan = $this->db->query("select sum(qty) as qty from permintaan where MONTH(tanggal)=".date("m"))->row_array();
        $barang_masuk = $this->db->query("select sum(qty) as qty from barang_masuk where MONTH(tanggal_transaksi)=".date("m"))->row_array();
        $barang_keluar = $this->db->query("select sum(qty) as qty from barang_keluar where MONTH(tanggal_transaksi)=".date("m"))->row_array();
        $barang_return = $this->db->query("select sum(qty) as qty from barang_return where MONTH(tanggal)=".date("m"))->row_array();
        $data_permintaan_gudang = $this->db->get_where("permintaan",['status'=>"Dibuat"],1)->result();

        $data = array(
            "permintaan" => $permintaan['qty'] == null?0:$permintaan['qty'],
            "barang_masuk" => $barang_masuk['qty'] == null?0:$barang_masuk['qty'],
            "barang_keluar" => $barang_keluar['qty'] == null?0:$barang_keluar['qty'],
            "barang_return" => $barang_return['qty'] == null?0:$barang_return['qty'],
            "permintaan_gudang" => $data_permintaan_gudang
        );
        
        $this->load->view('header');
        $this->load->view('dashboard',$data);
        $this->load->view('footer');
    }

}

/* End of file Dashboard.php */



?>