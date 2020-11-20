<?php

class Home extends Controller {

    public function __construct(){
        $this->stdModel = $this->model('Anime_model');
    }

    public function index()
    {
        $data['judul'] = 'AniTime Homepage';
        $data['anime'] = $this->model('Anime_model')->getAllAnime();
        $data['silde'] = $this->model('Anime_model')->getFewAnime();

        $this->view('home/index', $data);
    }

    public function detail($id){
        $this->animeModel = $this->model('Anime_model');

        $data['anime'] = $this->model('Anime_model')->getAnime($id);
        $data['judul'] = $data['anime']['judul'];
        $this->view('anime/detail', $data);
    }    
}