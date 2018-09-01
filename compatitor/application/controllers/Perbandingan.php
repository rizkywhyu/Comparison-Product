<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perbandingan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('battery_model');
		$this->load->model('battery_pesaing_model');
		$this->load->model('diesel_model');
		$this->load->model('diesel_pesaing_model');
	}
	
	public function index(){
        $this->load->view('inti/header');
        $this->load->view('inti/index');
        $this->load->view('inti/footer');
    }
    public function view_battery(){
        $data['pilih_produk']=$this->battery_model->get_all();
        $data['pilih_pesaing']=$this->battery_pesaing_model->get_all();
        $this->load->view('inti/header');
        $this->load->view('frontend/view_compare_battery',$data);
        $this->load->view('inti/footer');
    }
    public function passing_battery(){
        $produk = $this->input->post('pil_produk');
        $pilihan = $this->input->post('pil_pesaing');
        $array = array($produk => $pilihan);
        $str = $this->uri->assoc_to_uri($array);
        redirect('perbandingan/compare_battery/'.$str);
    }
    public function compare_battery($produk,$pilihan){
        $data['forklift']=$this->battery_model->get_by_id($produk);
        $data['pesaing']=$this->battery_pesaing_model->get_by_id($pilihan);
        //$data['produk']=$produk;
        //$data['pilihan']=$pilihan;
        $array = array($produk => $pilihan);
        $data['str'] = $this->uri->assoc_to_uri($array);
        $this->load->view('inti/header');
        $this->load->view('frontend/battery_compare',$data);
        $this->load->view('inti/footer');
    }
    public function view_diesel(){
        $data['pilih_produk']=$this->diesel_model->get_all();
        $data['pilih_pesaing']=$this->diesel_pesaing_model->get_all();
        $this->load->view('inti/header');
        $this->load->view('frontend/view_compare_diesel',$data);
        $this->load->view('inti/footer');
    }
    public function passing_diesel(){
        $produk = $this->input->post('pil_produk');
        $pilihan = $this->input->post('pil_pesaing');
        $array = array($produk => $pilihan);
        $str = $this->uri->assoc_to_uri($array);
        redirect('perbandingan/compare_diesel/'.$str);
    }
    public function compare_diesel($produk,$pilihan){
        $data['forklift']=$this->diesel_model->get_by_id($produk);
        $data['pesaing']=$data['pesaing']=$this->diesel_pesaing_model->get_by_id($pilihan);
        $array = array($produk => $pilihan);
        $data['str'] = $this->uri->assoc_to_uri($array);
        $this->load->view('inti/header');
        $this->load->view('frontend/diesel_compare',$data);
        $this->load->view('inti/footer');
    }
}
?>