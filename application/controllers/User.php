<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id")) {
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $user = $this->main_model->get_data('user')->result();

        $data = array(
            "data_user"=>$user
        );
        $this->load->view('header');
        $this->load->view('list_user',$data);
        $this->load->view('footer');
    }

    public function add_action(){
        $post = $this->input->post();

        $data_simpan = array(
            'nama'=>$post['nama'],
            'username'=>$post['username'],
            'password'=>md5($post['password']),
            'role'=>$post['role'],
        );
        $this->main_model->insert_data($data_simpan,'user');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Ditambah!", "success");');
        redirect('user','refresh');
       
    }

    public function edit($id){
        $user = $this->main_model->find_data(['id'=>$id],'user')->row_array();
        $data['user'] = $user;
        $this->load->view('header');
        $this->load->view('edit_user',$data);
        $this->load->view('footer');
    }

    public function update(){
        $post = $this->input->post();

        if ($post['password']=="") {
            $data_simpan = array(
                'nama'=>$post['nama'],
                'username'=>$post['username'],
                'role'=>$post['role'],
            );
        }else{
            $data_simpan = array(
                'nama'=>$post['nama'],
                'username'=>$post['username'],
                'role'=>$post['role'],
                'password'=>md5($post['password']),
            );
        }
    
        $this->main_model->update_data(['id'=>$post['id']],$data_simpan,'user');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Diubah!", "success");');
        redirect('user','refresh');
    }

    public function delete($id){
        $this->main_model->delete_data(['id'=>$id],'user');
        $this->session->set_flashdata('msg','swal("Sukses!", "Data Berhasil Dihapus!", "success");');
        redirect('user','refresh');
    }
    
}


/* End of file Barang.php */



?>