<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }

}

/* End of file Dashboard.php */



?>