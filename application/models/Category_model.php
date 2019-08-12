<?php
    class  Category_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function create_category(){
            $data = array(
                'name' => $this->input->post('name')
            );

            return $this->db->insert('category',$data);
        }

        public function get_categories(){
            $this->db->order_by('name');
            $query = $this->db->get('category');
            return $query->result_array();
        }


        public function get_category($id){
            $query = $this->db->get_where('category', array('id' => $id));

            return $query->row(); 
        }

    }