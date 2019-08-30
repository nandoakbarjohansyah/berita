<?php
class Home_user extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {

        $data['judul'] = "beranda";
        $data['postingan'] = $this->Home_model->getAll();

        $this->load->view('user/header', $data);
        // $this->load->view('admin/topbar');
        $this->load->view('user/sidebar');
        $this->load->view('user/home', $data);
        $this->load->view('user/footer');
    }
}
?>