<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function index()
    {
        $this->load->view('user_login');
    }

    public function authenticate()
    {
        // Get the input values
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    
        // Load the database library
        $this->load->database();
    
        // Query the database to verify the login credentials
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
        $user = $query->row();
    
        if ($user) {
            // If login is successful
            $this->session->set_userdata('username', $username);
            redirect('Rental');
        } else {
            // If login fails, redirect back to the login page with an error message
            $this->session->set_flashdata('error','Invalid username or password');
            redirect('user');
        }
    }
        public function __construct()
          {
        parent::__construct();
        $this->load->library('session');
         }

        }


    
    
    
    
    
    