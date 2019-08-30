<?php
class Crud extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    function index()
    {
        $data['berita'] = $this->berita_model->tampil_data()->result();
        $this->load->view('v_data', $data);
    }

    function tambah()
    {
        $this->load->view('v_input');
    }

    function tambah_status()
    {
        $caption = $this->input->post('caption');
        $foto = $this->input->post('foto');

        $data = array(
            'nama' => $caption,
            'alamat' => $foto,

        );
        $this->m_data->input_data($data, 'user');
        redirect('crud/index');
    }
}
