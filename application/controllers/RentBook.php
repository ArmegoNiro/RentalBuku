<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RentBook extends CI_Controller {

    public function rentBookForm()
    {
        $this->load->view('rent_book_form');
    }

    public function processRentBook()
    {
        // Process the rental request and save the data to the database
        // Retrieve the form input values using $this->input->post()
        // Perform validation and data processing

        // After processing, you can redirect the user to a success page or perform any other actions
        redirect('rent/success');
    }

}
