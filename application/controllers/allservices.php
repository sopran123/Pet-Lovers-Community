<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allservices extends CI_Controller {
    
    public function index(){
        $this->load->model('postmodel');
         $data['item']=$this->postmodel->getData();
         $this->load->view('template/header');
         $this->load->view('pages/allservices', $data);
         $this->load->view('template/footer');

    }public function sales(){
        $this->load->model('postmodel');
         $data['item']=$this->postmodel->getData();
         $this->load->view('template/header');
         $this->load->view('pages/itemsales', $data);
         $this->load->view('template/footer');

    }
	public function featured(){
        $this->load->model('postmodel');
         $data['item']=$this->postmodel->getData();
         $this->load->view('template/header');
         $this->load->view('pages/featured', $data);
         $this->load->view('template/footer');

    }
	public function recent(){
        $this->load->model('postmodel');
         $data['item']=$this->postmodel->getData();
         $this->load->view('template/header');
         $this->load->view('pages/recent', $data);
         $this->load->view('template/footer');

    }
	public function adoptions(){
        $this->load->model('postmodel');
         $data['item']=$this->postmodel->getData();
         $this->load->view('template/header');
         $this->load->view('pages/adoptions', $data);
         $this->load->view('template/footer');

    }
	public function donations(){
        $this->load->model('postmodel');
         $data['item']=$this->postmodel->getData();
         $this->load->view('template/header');
         $this->load->view('pages/donations', $data);
         $this->load->view('template/footer');

    }
}