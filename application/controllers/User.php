<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['postingan'] = $this->Home_model->getAll();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar', $data);
        // $this->load->view('user/topbar', $data);
        $this->load->view('user/home', $data);
        $this->load->view('user/footer');
    }
}
