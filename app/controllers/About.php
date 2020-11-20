<?php

class About extends Controller{

    public function index()
    {
        $data['judul'] = 'AniTime Page';

        $this->view('inc/header', $data);
        $this->view('about/index', $data);
        $this->view('inc/footer');
    }

    // public function page()
    // {
    //     $data['judul'] = 'AniTime Page';
    //     $this->view('inc/header', $data);
    //     $this->view('about/page', $data);
    //     $this->view('inc/footer');
    // }
}