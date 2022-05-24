<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id")) {
            redirect('login','refresh');
        }
    }

    public function barang_masuk()
    {
        $barang_masuk = $this->db->query("SELECT det.qty, det.tanggal_transaksi,brg.kode_barcode,brg.nama_barang from barang_masuk as det join barang as brg on det.id_barang=brg.id")->result();

        $data = array(
            "data_barang_masuk"=>$barang_masuk
        );
        $this->load->view('header');
        $this->load->view('laporan_barang_masuk',$data);
        $this->load->view('footer');
    }

    public function barang_keluar()
    {
        $barang_keluar = $this->db->query("SELECT det.qty, det.tanggal_transaksi,brg.kode_barcode,brg.nama_barang from barang_keluar as det join barang as brg on det.id_barang=brg.id")->result();

        $data = array(
            "data_barang_keluar"=>$barang_keluar
        );
        $this->load->view('header');
        $this->load->view('laporan_barang_keluar',$data);
        $this->load->view('footer');
    }

    public function barang_return()
    {
        $barang_return = $this->db->query("SELECT det.qty,det.keterangan, det.tanggal,det.nama_barang from barang_return as det  where status = 'Return'")->result();

        $data = array(
            "data_barang_return"=>$barang_return
        );
        $this->load->view('header');
        $this->load->view('laporan_barang_return',$data);
        $this->load->view('footer');
    }

    public function barang_service()
    {
        $barang_service = $this->db->query("SELECT det.qty,det.keterangan, det.tanggal, det.nama_barang from barang_return as det where status = 'Service'")->result();

        $data = array(
            "data_barang_service"=>$barang_service
        );
        $this->load->view('header');
        $this->load->view('laporan_barang_service',$data);
        $this->load->view('footer');
    }
  
}


/* End of file Barang.php */



?>