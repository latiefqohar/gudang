<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login');
    }

    public function action_login(){
        $post = $this->input->post();
        $data = array(
            "username"=>$post['username'],
            "password"=>md5($post['password'])
        );

        $cek = $this->db->get_where('user',$data)->num_rows();
        if ($cek <1) {
            $this->session->set_flashdata('msg','swal("Gagal!", "Username atau Password Salah!", "error");');
            redirect('Login','refresh');
        }else{
            $data_user =  $this->db->get_where('user',$data)->row_array();
            $this->session->set_userdata($data_user);
            redirect('Dashboard','refresh');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Login','refresh');
    }
    public function ubah_password(){
        $this->load->view('header');
        $this->load->view('ubah_password');
        $this->load->view('footer');
        
    }

    public function aksi_ubah_password(){
        $password   = $this->input->post('password');
        $id_user = $this->session->userdata('id');
        $this->main_model->update_data(['id'=>$id_user],['password'=>md5($password)],'user');
        $this->session->set_flashdata('msg','swal("Sukses!", "Password Berhasil Diubah!", "success");');
        redirect('login/ubah_password','refresh');
    }

}

/* End of file Login.php */

?>