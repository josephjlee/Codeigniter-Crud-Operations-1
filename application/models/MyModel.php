<?php


class MyModel extends CI_Model{


    public function get_CrudOps(){
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
          $this->db->or_like('email', $this->input->get("search")); 
        }
        $query = $this->db->get("new");
        return $query->result();
    }


    public function insert_item()
    {    
        $this->load->helper('string');
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'age' => $this->input->post('age')
        );
        return $this->db->insert('new', $data);
    }


    public function update_item($id) 
    {
        $data=array(
            'name' => $this->input->post('name'),
            'email'=> $this->input->post('email')
        );
        if($id==0){
            return $this->db->insert('new',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('new',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('new', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('new', array('id' => $id));
    }
}
?>