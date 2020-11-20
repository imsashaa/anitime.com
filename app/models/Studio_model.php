<?php

class Studio_model {
    private $table = 'studio';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllStudio()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getStudio($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id = :id');
        $this->db->bind(':id', $id);

        return $this->db->single();
    }

    public function tambah($data){
        $this->db->query('INSERT into studio VALUES("", :nama, :lokasi, :deskripsi, :image)');

        $this->db->bind(':nama',$data['nama']);
        $this->db->bind(':lokasi',$data['lokasi']);
        $this->db->bind(':deskripsi',$data['deskripsi']);
        $this->db->bind(':image',$data['image']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($data)
    {
        $this->db->query('UPDATE studio SET nama = :nama, lokasi = :lokasi, deskripsi = :deskripsi, image = :image WHERE id = :id');
        // $this->db->query('UPDATE studio SET nama = :nama, lokasi = :lokasi, deskripsi = :deskripsi WHERE id = :id');

        $this->db->bind(':id',$data['id']);
        $this->db->bind(':nama',$data['nama']);
        $this->db->bind(':lokasi',$data['lokasi']);
        $this->db->bind(':deskripsi',$data['deskripsi']);
        $this->db->bind(':image',$data['image']);
        
        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }

    public function delete($id)
    {
        $this->db->query('DELETE FROM studio WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}