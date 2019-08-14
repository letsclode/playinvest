<?php
    class Menu extends CI_Controller{
        public function index(){ 
            $data['title'] = 'menu';
            $this->load->view('templates/header');
            $this->load->view('menu/view', $data);
            $this->load->view('templates/footer');
        }
    }