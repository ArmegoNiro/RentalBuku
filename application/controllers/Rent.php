<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent extends CI_Controller {

    public function index()
    {
        $this->load->database();
        $this->load->model('Book_model');

        if ($this->input->post('rent_book')) {
            $book_id = $this->input->post('book_id');
            $book = $this->Book_model->getBook($book_id);

            if ($book['stok'] > 0) {
                // Pass the book ID and title as parameters
                redirect('rent/processRent/' . $book_id);
            }
        }

        $data['books'] = $this->Book_model->getBooks();
        $this->load->view('rent_view', $data);
    }

    public function decreaseBookStock($book_id)
    {
        $this->load->database();
        $this->load->model('Book_model');

        $book = $this->Book_model->getBook($book_id);

        if ($book['stok'] > 0) {
            $data['book'] = $book;
            $this->load->view('rent_book_form', $data);
        }
    }

    public function processRent($book_id)
    {
        $this->load->database();
        $this->load->model('Book_model');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('duration', 'Duration', 'required|callback_valid_date');

        if ($this->form_validation->run() == FALSE) {
            // Form validation failed, show the form with validation errors
            $book = $this->Book_model->getBook($book_id);
            $data['book'] = $book;
            $this->load->view('rent_book_form', $data);
        } else {
            // Form validation passed, save the rental data to the database
            $name = $this->input->post('name');
            $address = $this->input->post('address');
            $duration = $this->input->post('duration');
            $duration_date = date('Y-m-d', strtotime($duration));

            $book = $this->Book_model->getBook($book_id);
            $book_title = $book['judul'];

            $this->db->insert('peminjaman', [
                'book_id' => $book_id,
                'name' => $name,
                'address' => $address,
                'duration' => $duration_date,
                'book_title' => $book_title
            ]);

            // Decrease the book stock
            $this->Book_model->decreaseBookStock($book_id);

            redirect('rent/success');
        }
    }

    public function success()
    {
        $this->load->view('rent_success');
    }

    public function valid_date($date)
    {
        if (!empty($date)) {
            if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $date)) {
                return true;
            }
        }

        $this->form_validation->set_message('valid_date', 'The {field} field must be in the format YYYY-MM-DD.');
        return false;
    }
}
