<?php
    class Menu extends CI_Controller{
        public function view($page = 'home'){ 
            $data['title'] = 'menu';
            $this->load->view('templates/header');
           // $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }
    }