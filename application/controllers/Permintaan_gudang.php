<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan_gudang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id")) {
            redirect('login','refresh');
        }
    }

    public function index()
    {
        // $permintaan =  $this->main_model->get_data('permintaan')->result();
        $permintaan =  $this->db->query('select * from permintaan group by nama_pembeli')->result();
        $barang = $this->main_model->get_data('barang')->result();

        $data = array(
            "data_permintaan"=>$permintaan,
            "data_barang"=>$barang
        );
        $this->load->view('header');
        $this->load->view('list_permintaan',$data);
        $this->load->view('footer');
    }

    public function detail($id){
        $data_permintaan = $this->main_model->find_data(['id'=>$id],'permintaan')->row_array();
        $list = $this->db->query("SELECT permintaan.*, barang.id,barang.kode_barcode,barang.suplier,barang.harga from permintaan join barang on permintaan.nama_barang=barang.nama_barang where permintaan.nama_pembeli ='".$data_permintaan['nama_pembeli']."'")->result();
        // $list = $this->main_model->find_data(['nama_pembeli'=>$data_permintaan['nama_pembeli']],'permintaan')->result();
        $data = array(
            'data_permintaan'=>$data_permintaan,
            'list' => $list
        );
        $this->load->view('header');
        $this->load->view('detail_permintaan',$data);
        $this->load->view('footer');
    }

    public function add_action(){
        $post = $this->input->post();

        for ($i=0; $i < count($post['nama_barang']) ; $i++) { 

            if ($post['nama_barang'][$i] != "") {
                $data_simpan = array(
                    'nama_barang'=>$post['nama_barang'][$i],
                    'qty'=>$post['qty'][$i],
                    'status'=>"Dibuat",
                    'tanggal'=>date('Y-m-d H:i:s'),
                    'kasir'=>$this->session->userdata('nama'),
                    'nama_pembeli' => $post['nama_pembeli'],
                    'alamat' => $post['alamat_pembeli'],
                );
                $this->main_model->insert_data($data_simpan,'permintaan');
            }
           
        }

        
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Ditambah!", "success");');
        redirect('permintaan_gudang','refresh');
       
    }

    public function edit($id){
        $suplier = $this->main_model->find_data(['id'=>$id],'suplier')->row_array();
        $data['suplier'] = $suplier;
        $this->load->view('header');
        $this->load->view('edit_suplier',$data);
        $this->load->view('footer');
    }

    public function update(){
        $post = $this->input->post();
    
        $data_simpan = array(
            'nama_suplier'=>$post['nama_suplier'],
            'alamat'=>$post['alamat'],
        );
        $this->main_model->update_data(['id'=>$post['id']],$data_simpan,'suplier');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Diubah!", "success");');
        redirect('suplier','refresh');
    }

    public function selesai($id){
        $data_permintaan = $this->main_model->find_data(['id'=>$id],'permintaan')->row_array();

        $this->main_model->update_data(['nama_pembeli'=>$data_permintaan['nama_pembeli']],['status'=>'Selesai Disiapkan'],'permintaan');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Diubah!", "success");');
        redirect('permintaan_gudang','refresh');
    }

    public function delete($id){
        $data_permintaan = $this->main_model->find_data(['id'=>$id],'permintaan')->row_array();

        $this->main_model->delete_data(['nama_pembeli'=>$data_permintaan['nama_pembeli']],'permintaan');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Dihapus!", "success");');
        redirect('permintaan_gudang','refresh');
    }
    
}


/* End of file Barang.php */



?>