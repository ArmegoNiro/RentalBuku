    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Register extends CI_Controller {

        public function index()
        {
            $this->load->view('register_view');
        }

        public function processRegister()
        {
            // Get the input values from the registration form
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Load the database library
            $this->load->database();

            // Check if the username already exists in the database
            $query = $this->db->get_where('users', array('username' => $username));
            $existingUser = $query->row();

            if ($existingUser) {
                // If the username already exists, display an error message
                $this->session->set_flashdata('error', 'Username already exists. Please choose a different username.');
                redirect('register');
            } else {
                // If the username doesn't exist, insert the new user into the database
                $data = array(
                    'username' => $username,
                    'password' => $password
                );
                $this->db->insert('users', $data);

                // Redirect to the login page or display a success message
                $this->session->set_flashdata('success', 'Registration successful. You can now login.');
                
                // Redirect to the login page
                redirect('user');
            }
        }

    }