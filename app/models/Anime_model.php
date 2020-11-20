<?php

class Anime_model {
    private $table = 'anime';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAnime()
    {
        $this->db->query('SELECT anime.id, anime.judul, anime.id_studio, anime.tahun_rilis, anime.total_eps, anime.sinopsis, anime.pv, anime.image, studio.nama FROM '.$this->table.' JOIN studio ON anime.id_studio=studio.id');
        return $this->db->resultSet();
    }
    public function getFewAnime()
    {
        $this->db->query('SELECT * FROM '.$this->table.' ORDER BY id LIMIT 4');
        return $this->db->resultSet();
    }

    public function getAnime($id)
    {
        // $this->db->query('SELECT * FROM '.$this->table.' WHERE id = :id');
        $this->db->query('SELECT anime.id, anime.judul, anime.id_studio, anime.tahun_rilis, anime.total_eps, anime.sinopsis, anime.pv, anime.image, studio.nama FROM '.$this->table.' JOIN studio ON anime.id_studio=studio.id WHERE anime.id = :id');
        $this->db->bind(':id', $id);

        return $this->db->single();
    }
    

    public function tambah($data){
        $this->db->query('INSERT into '.$this->table.' VALUES("", :nama, :lokasi, :deskripsi, :image)');

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
        // $this->db->query('UPDATE studio SET nama = :nama, lokasi = :nim, deskripsi = :jurusan, image = :image WHERE id = :id');
        $this->db->query('UPDATE '.$this->table.' SET nama = :nama, lokasi = :lokasi, deskripsi = :deskripsi WHERE id = :id');

        $this->db->bind(':id',$data['id']);
        $this->db->bind(':nama',$data['nama']);
        $this->db->bind(':lokasi',$data['lokasi']);
        $this->db->bind(':deskripsi',$data['deskripsi']);
        // $this->db->bind(':image',$data['image']);
        
        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }

    public function delete($id)
    {
        $this->db->query('DELETE FROM '.$this->table.' WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}