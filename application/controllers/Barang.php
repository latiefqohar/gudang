<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function index()
    {
        $barang = $this->main_model->get_data('barang')->result();

        $data = array(
            "data_barang"=>$barang
        );
        $this->load->view('header');
        $this->load->view('list_barang',$data);
        $this->load->view('footer');
    }

    public function add_action(){
        $post = $this->input->post();
        $cek_barcode = $this->main_model->find_data(['kode_barcode'=>$post['kode_barcode']],'barang')->num_rows();
        if ($cek_barcode > 0) {
           $this->session->set_flashdata('msg','swal("Gagal!", "Barcode sudah ada!", "error");');
           redirect('barang','refresh');
        }else {
            $data_simpan = array(
                'kode_barcode'=>$post['kode_barcode'],
                'nama_barang'=>$post['nama_barang'],
                'qty'=>$post['qty'],
                'harga'=>$post['harga'],
                'no_rak'=>$post['no_rak'],
            );
            $this->main_model->insert_data($data_simpan,'barang');
            $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil DItambah!", "success");');
            redirect('barang','refresh');
        }
       
    }

    public function edit($id){
        $barang = $this->main_model->find_data(['id'=>$id],'barang')->row_array();
        $data['barang'] = $barang;
        $this->load->view('header');
        $this->load->view('edit_barang',$data);
        $this->load->view('footer');
    }

    public function update(){
        $post = $this->input->post();
    
            $data_simpan = array(
                'kode_barcode'=>$post['kode_barcode'],
                'nama_barang'=>$post['nama_barang'],
                'qty'=>$post['qty'],
                'harga'=>$post['harga'],
                'no_rak'=>$post['no_rak'],
            );
            $this->main_model->update_data(['id'=>$post['id']],$data_simpan,'barang');
            $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Diubah!", "success");');
            redirect('barang','refresh');
    }

    public function delete($id){
        $this->main_model->delete_data(['id'=>$id],'barang');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Dihapus!", "success");');
        redirect('barang','refresh');
    }
       
}


/* End of file Barang.php */



?>