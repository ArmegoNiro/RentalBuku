<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {

    public function getBooks()
    {
        $query = $this->db->get('buku');
        return $query->result_array();
    }

    public function getBook($book_id)
    {
        $this->db->where('idbuku', $book_id);
        $query = $this->db->get('buku');
        return $query->row_array();
    }

    public function decreaseBookStock($book_id)
    {
        $this->db->where('idbuku', $book_id);
        $this->db->set('stok', 'stok - 1', FALSE);
        $this->db->update('buku');
    }

}

