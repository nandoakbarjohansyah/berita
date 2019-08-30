<?php
class Detail extends CI_Controller
{ 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pos_model');
    }

    public function detail($id)
    {
        $this->load->model('Pos_model');
        $detail = $this->Pos_model->detail_data($id);
        $data['postingan'] = $detail;
        $data['title'] = 'Detail';

        $this->load->view('admin/header', $data);
        // $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('detail', $data);
        $this->load->view('admin/footer');
    }
}
