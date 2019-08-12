<?php 
    class Users extends CI_Controller{
        public function register(){
            $data['title'] = 'SignUp';

            $this->form_validation->set_rules('name','Name','required|callback_check_name_exists');
            $this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('password2','Confirm Password','matches[password]');
           
            if($this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/register',$data);
                $this->load->view('templates/footer');
            }else{
                //Encrypt Password
                $enc_password = md5($this->input->post('password'));

                //call model
                $this->user_model->register($enc_password);
                //set massage
                $this->session->set_flashdata('user_registered','You are now registered');
                redirect('posts');
            }
        }
        //LOGIN
        public function login(){
			$data['title'] = 'Sign In';
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else {
				
				// Get username
				$username = $this->input->post('name');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));
				// Login user
				$user_id = $this->user_model->login($username, $password);
				if($user_id){
                    
					 //Create session
					 $user_data = array(
						'user_id' => $user_id,
						'name' => $name,
						'logged_in' => true
					);
				    $this->session->set_userdata($user_data);
					// Set message
					$this->session->set_flashdata('user_login', 'You are now logged in');
					redirect('posts');
				} else {
					// Set message
					$this->session->set_flashdata('user_failed', 'Login is invalid');
					redirect('users/login');
				}		
			}
		}


        //LOGOUT USER
        public function logout(){
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('name');
            $this->session->unset_userdata('user_id');

            $this->session->set_flashdata('user_logout', 'You are now logout');
					redirect('users/login');
        }
        //unset user data


        

        public function check_name_exists($name){
            $this->form_validation->set_message('check_name_exists', 'Name already Taken');

            if($this->user_model->check_name_exists($name)){
                return true;
            }else{
                return false;
            }
        }

        public function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists', 'Email already Taken');

            if($this->user_model->check_email_exists($email)){
                return true;
            }else{
                return false;
            }
        }

        
    }