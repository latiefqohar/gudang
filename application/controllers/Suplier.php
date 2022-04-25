<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id")) {
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $suplier = $this->main_model->get_data('suplier')->result();

        $data = array(
            "data_suplier"=>$suplier
        );
        $this->load->view('header');
        $this->load->view('list_suplier',$data);
        $this->load->view('footer');
    }

    public function add_action(){
        $post = $this->input->post();

        $data_simpan = array(
            'nama_suplier'=>$post['nama_suplier'],
            'alamat'=>$post['alamat'],
        );
        $this->main_model->insert_data($data_simpan,'suplier');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Ditambah!", "success");');
        redirect('suplier','refresh');
       
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

    public function delete($id){
        $this->main_model->delete_data(['id'=>$id],'suplier');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Dihapus!", "success");');
        redirect('suplier','refresh');
    }
    
}


/* End of file Barang.php */



?>