<?php class regist_model extends CI_Model
{
    public function getAllData()
    {
        return $query = $this->db->get('sm')->result_array();
    }

    public function tambahData()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "notelp" => $this->input->post('notelp', true),
            "gender" => $this->input->post('gender', true),
            "instansi" => $this->input->post('instansi', true),
        ];
        $this->db->insert('sm', $data);
    }

    public function getData()
    {
        return $this->db->get_where('sm')->row_array();
    }

    public function ubahData()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "notelp" => $this->input->post('notelp', true),
            "gender" => $this->input->post('gender', true),
            "instansi" => $this->input->post('instansi', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('sm', $data);
    }

    public function hapusData($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('sm', ['id' => $id]);
    }
}
