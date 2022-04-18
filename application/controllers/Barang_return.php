<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_return extends CI_Controller {

    public function index()
    {
        $barang_return = $this->main_model->get_data('barang_return')->result();
        $barang = $this->main_model->get_data('barang')->result();

        $data = array(
            "data_barang_return"=>$barang_return,
            "data_barang"=>$barang
        );
        $this->load->view('header');
        $this->load->view('list_barang_return',$data);
        $this->load->view('footer');
    }

    public function add_action(){
        $post = $this->input->post();
       

        $this->db->query("UPDATE barang SET qty=qty-1 where nama_barang = '".$post['nama_barang']."'");
        
        $data_simpan = array(
            'nama_barang'=>$post['nama_barang'],
            'qty'=>$post['qty'],
            'status'=>$post['status'],
            'keterangan'=>$post['keterangan'],
            'tanggal'=>date('Y-m-d H:i:s')
        );
        $this->main_model->insert_data($data_simpan,'barang_return');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Ditambah!", "success");');
        redirect('barang_return','refresh');
       
    }

    public function edit($id){
        $barang_return = $this->main_model->find_data(['id'=>$id],'barang_return')->row_array();
        $data['barang_return'] = $barang_return;
        $this->load->view('header');
        $this->load->view('edit_barang_return',$data);
        $this->load->view('footer');
    }

    public function update(){
        $post = $this->input->post();
    
        $data_simpan = array(
            'nama_barang'=>$post['nama_barang'],
            'qty'=>$post['qty'],
            'status'=>$post['status'],
            'keterangan'=>$post['keterangan'],
            'tanggal'=>date('Y-m-d H:i:s')
        );

        $this->main_model->update_data(['id'=>$post['id']],$data_simpan,'barang_return');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Diubah!", "success");');
        redirect('barang_return','refresh');
    }


    public function delete($id){
        $this->main_model->delete_data(['id'=>$id],'barang_return');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Dihapus!", "success");');
        redirect('barang_return','refresh');
    }
    
}


/* End of file Barang.php */



?>