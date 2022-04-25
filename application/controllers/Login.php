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
        
    }

}

/* End of file Login.php */

?>