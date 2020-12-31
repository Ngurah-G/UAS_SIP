<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($page='') {
        $data['title'] = 'Blog';
        $data['contents'] = 'front/blog/blog_view';
        $jumlah_data = $this->Blog_model->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'blog/home/index';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 4;
        $this->pagination->initialize($config); 
        $data['hasil'] = $this->Blog_model->get_all($config['per_page'],$page);
        $this->load->view('front/layout/template', $data);
    }
    public function detail($slug){
        $data['title'] = 'Blog';
    	$data['detail'] = $this->Blog_model->get_detail_by_slug($slug);
        $data['contents'] = 'front/blog/blog_detail';
        $this->load->view('front/layout/template', $data);
    }
   
}


