<?php
class Pos_model extends CI_Model{

    public function getAll(){
        return $this->db->get('postingan')->result_array();
    }

    public function input_data($data, $table) {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('postingan', array('id' => $id))->row();
        return $query;
    }

    public function update($postingan){
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('postingan', $postingan);
    }

    public function getDetail($where){
        return $this->db->get_where('postingan', ['id' => $where])->row_array();
    }

}
