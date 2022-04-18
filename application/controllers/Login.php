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
            $data_user =  $this->db->get_where('user',$data)->row_array();
            $this->session->set_userdata($data);
            $this->session->set_flashdata('msg','swal("Gagal!", "Username atau Password Salah!", "error");');
            redirect('Login','refresh');
        }else{
            redirect('Dashboard','refresh');
        }
    }

}

/* End of file Login.php */

?>