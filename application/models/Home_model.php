<?php
class Home_model extends CI_Model{

    public function getAll(){
        return $this->db->get('postingan')->result_array();
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('postingan', array('id' => $id))->row();
        return $query;
    }

}
