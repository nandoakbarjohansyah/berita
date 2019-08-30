<?php
class Pos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pos_model');
    }

    public function index()
    {

        $data['judul'] = "table postingan";
        $data['postingan'] = $this->Pos_model->getAll();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        // $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {

        $judul = $this->input->post('judul');
        $foto = $this->input->post('foto');
        $caption = $this->input->post('caption');
        $foto = $_FILES['foto'];

        if ($foto = '') { } else {
            $config['upload_path']  = './assets/img';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }




        $data = array(
            'judul' => $judul,
            'foto' => $foto,
            'caption' => $caption
        );
        $this->Pos_model->input_data($data, 'postingan');
        redirect('pos/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Pos_model->hapus_data($where, 'postingan');
        redirect('pos/index');
    }

    public function edit($id)
    {
        $dt['da']=$this->Pos_model->db_edit($id)->row_array();
        $this->load->view('edit',$dt);
    }   

public function update()
{
    $judul=$this->input->post("judul");
    $caption=$this->input->post("caption");

    $config['upload_path'] = './uploads/';
    $config['allowed_types'] =     'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('file'))
    {
        $error = array('error' => $this->upload->display_errors());
    }
    else
    {
        $upload_data=$this->upload->data();
        $image_name=$upload_data['file_name'];
    }

$data=array('judul'=>$judul,'caption'=>$caption,'file'=>$image_name);
$this->Students_m->db_update($data,$id);
redirect("admin/index");
}





    public function detail($id)
    {
        $this->load->model('Pos_model');
        $detail = $this->Pos_model->detail_data($id);
        $data['postingan'] = $detail;
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        // $this->load->view('admin/topbar');
        $this->load->view('user/sidebar');
        $this->load->view('detail', $data);
        $this->load->view('admin/footer');
    }
}
