<?php
class User_model
{
    private $db;
    private $nama = 'Beno';

    public function getUser()
    {
        return $this->nama;
    }

    // public function getlogin($username, $password)
    // {
    //     $query = "SELECT * FROM user WHERE username = :username AND password = :password";

    //     $this->db->query($query);
    //     $this->db->bind('username', $username);
    //     $this->db->bind('password', $password);
    //     $this->db->execute();
    //     $this->db->single();
    // }
}
