<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Po extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id")) {
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $po = $this->db->query("SELECT * FROM po")->result();
        $data = array(
            "data_po"=>$po
        );
        $this->load->view('header');
        $this->load->view('list_po',$data);
        $this->load->view('footer');
    }

    public function tambah(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $post = $this->input->post();
            $data = array(
                "id_barang"=>$post['id_barang'],
                "total"=>$post['total']
            );
            $this->main_model->insert_data($data,'data_po_temp');
        }
        $suplier = $this->main_model->get_data('suplier')->result();
        $barang = $this->main_model->get_data('barang')->result();
        $temp = $this->db->query("SELECT po.id, brg.nama_barang, po.total from data_po_temp po join barang brg on po.id_barang = brg.id")->result();

        $data = array(
            "suplier"=>$suplier,
            'barang' => $barang,
            "data_po"=>$temp
        );

        $this->load->view('header');
        $this->load->view('tambah_po',$data);
        $this->load->view('footer');
    }

    public function delete_temp($id){
        $this->main_model->delete_data(['id'=>$id],'data_po_temp');
        redirect('po/tambah','refresh');
    }

    public function simpan_po(){
        $post=$this->input->post();
        $no_po = "po-".date("ymdhis");
        $suplier = $this->main_model->find_data(['id'=>$post['id_suplier']],'suplier')->row_array();
        // var_dump($post['id_suplier']);die();
        $total_barang = $this->db->query("select sum(total) as total from data_po_temp")->row_array();
        if ($total_barang['total'] == null) {
            $this->session->set_flashdata('msg','swal("Gagal!", "Anda belum menambahkan data barang, tambahkan minimal 1 data barang!", "error");');
            redirect('po/tambah','refresh');
        }else{
            $data_po = array(
                "no_po" => $no_po,
                "id_suplier" => $post['id_suplier'],
                "nama_suplier" => $suplier['nama_suplier'],
                "total_barang" => $total_barang['total'],
                "tanggal_transaksi" => date("Y-m-d H:i:s"),
                "status" => "Dibuat"
            );
    
            $this->db->insert('po', $data_po);
            $id_po = $this->db->insert_id();
    
            $barang = $this->main_model->get_data("data_po_temp")->result();
            foreach ($barang as $brg ) {
                $data_detail_po = array(
                    'id_po' => $id_po,
                    'id_barang' => $brg->id_barang,
                    'total' => $brg->total
                );
                $this->db->query("UPDATE barang  set qty=qty+".$brg->total." where id=".$brg->id_barang);
                $this->db->insert('data_po', $data_detail_po);
            }
    
            $this->db->empty_table('data_po_temp');
            $this->session->set_flashdata('msg','swal("Sukses!", "Data PO Berhasil Ditambah!", "success");');
            redirect('po','refresh');
        }
       
        
    }

    public function detail($id){
        $po = $this->main_model->find_data(['id'=>$id],'po')->row_array();
        $data_po = $this->db->query("SELECT po.id, po.total, brg.nama_barang FROM data_po as po join barang brg on po.id_barang=brg.id where po.id_po=".$id)->result();

        $data = array(
            'header'=>$po,
            'data_po'=>$data_po
        );
        $this->load->view('header');
        $this->load->view('detail_po',$data);
        $this->load->view('footer');
    }

    public function diterima($id){
        $this->main_model->update_data(['id'=>$id],['status'=>"Selesai"],'po');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data PO Berhasil Diubah!", "success");');
        redirect('po','refresh');
    }

    public function print($id){
        $po = $this->main_model->find_data(['id'=>$id],'po')->row_array();
        $data_po = $this->db->query("SELECT po.id, po.total, brg.nama_barang FROM data_po as po join barang brg on po.id_barang=brg.id where po.id_po=".$id)->result();

        $data = array(
            'header'=>$po,
            'data_po'=>$data_po
        );

        $this->load->view('print_po',$data);
    }


    public function delete($id){
        $this->main_model->delete_data(['id'=>$id],'po');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Dihapus!", "success");');
        redirect('po','refresh');
    }
    
}


/* End of file Barang.php */



?>