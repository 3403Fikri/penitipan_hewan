<?php

class Customers_model extends CI_Model {

    private $table = 'customers';

    public function getAllCustomers() {
        return $this->db->get($this->table);
    }

}

?>