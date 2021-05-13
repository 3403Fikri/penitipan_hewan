<?php

class Users_model extends CI_Model {
    public $user_id;
    public $user_name;
    public $user_username;
    public $user_password;

    public function getUserByUsernamePassword($username, $password) {
        $this->db->where('user_username', $username);
        $this->db->where('user_password', md5($password));
        $this->db->from('users');
        return $this->db->get();
    }
}

?>