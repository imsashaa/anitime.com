<?php

class User_model{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cariUsername($username)
    {
        $this->db->query('SELECT * FROM admin WHERE username = :username');

        $this->db->bind(':username', $username);

        $row = $this->db->rowCount();

        if ($row > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO admin VALUES ("", :username, :password, :nama, :email, :level)');
        
        $this->db->bind(':username',$data['username']);
        $this->db->bind(':password',$data['password']);
        $this->db->bind(':nama',$data['nama']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':level',$data['level']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($password, $username)
    {
        $this->db->query('SELECT * FROM admin WHERE username = :username');

        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hash_password = $row['password'];

        if (password_verify($password, $hash_password)) {
            return $row;
        } else {
            return false;
        }
    }
}