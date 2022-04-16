<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan_gudang extends CI_Controller {

    public function index()
    {
        $permintaan = $this->main_model->get_data('permintaan')->result();
        $barang = $this->main_model->get_data('barang')->result();

        $data = array(
            "data_permintaan"=>$permintaan,
            "data_barang"=>$barang
        );
        $this->load->view('header');
        $this->load->view('list_permintaan',$data);
        $this->load->view('footer');
    }

    public function add_action(){
        $post = $this->input->post();

        $data_simpan = array(
            'nama_barang'=>$post['nama_barang'],
            'qty'=>$post['qty'],
            'status'=>"Dibuat",
            'tanggal'=>date('Y-m-d H:i:s')
        );
        $this->main_model->insert_data($data_simpan,'permintaan');
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
        $this->main_model->update_data(['id'=>$id],['status'=>'Selesai Disiapkan'],'permintaan');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Diubah!", "success");');
        redirect('permintaan_gudang','refresh');
    }

    public function delete($id){
        $this->main_model->delete_data(['id'=>$id],'permintaan');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Dihapus!", "success");');
        redirect('permintaan_gudang','refresh');
    }
    
}


/* End of file Barang.php */



?>