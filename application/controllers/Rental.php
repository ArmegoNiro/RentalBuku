<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental extends CI_Controller {

    public function index()
    {
           // Load the 'avatar' helper
           $this->load->helper('avatar');

        $data['books'] = [
            [
                'title' => 'Harry Potter Vol. 10',
                'author' => 'JK Rowling',
                'description' => 'Warner Bros',
                'image' => 'harrypotter.png'
            ],
            [
                'title' => 'Texas Chainsaw Man',
                'author' => 'Penulis 2',
                'description' => 'Shueisha',
                'image' => 'texas.png'
                
            ],
            [
                'title' => 'Into the Sky',
                'author' => 'Puereran Nahad',
                'description' => 'Erlangga',    
                'image' => 'intothesky.png'
                
            ],
            // Add more books here
        ];

        // Load the 'frontend' view and pass the data
        $this->load->view('frontend', $data);
        
    }

    public function logout()
    {
        // Dump session data for debugging
        var_dump($this->session->userdata('username'));

        // Clear session data or perform any other logout operations
        $this->session->unset_userdata('username');
    
        // Redirect the user to the Rental page
        redirect('Rental');
    }
    


}
