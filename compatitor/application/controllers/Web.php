<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index(){
        $this->load->view('inti/header');
        $this->load->view('inti/index');
        $this->load->view('inti/footer');
    }

    public function overview(){
        $this->load->view('inti/header');
        $this->load->view('inti/page');
        $this->load->view('inti/footer');
    }

    public function compare(){
        $this->load->view('inti/header');
        $this->load->view('inti/index');
        $this->load->view('inti/footer');
    }

     public function visi(){
        $this->load->view('inti/header');
        $this->load->view('inti/visidanmisi');
        $this->load->view('inti/footer');
    }
     public function log(){
        //$this->load->view('inti/header');
        $this->load->view('inti/modal_login');
        //$this->load->view('inti/footer');
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>