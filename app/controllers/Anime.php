<?php

class Studio extends Controller {

    public function __construct(){
        $this->animeModel = $this->model('Anime_model');
    }

    public function detail($id){
        $this->animeModel = $this->model('Anime_model');

        $data['anime'] = $this->model('Anime_model')->getAnime($id);
        $data['judul'] = $data['anime']['judul'];
        $this->view('anime/detail', $data);
    }

    // public function tambah(){

    //     $data['judul'] = 'Form New Studio';

    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //         $data = [
    //             'nama' => trim($_POST['nama']),
    //             'lokasi' => trim($_POST['lokasi']),
    //             'deskripsi' => trim($_POST['deskripsi']),
    //             'image' => trim($_FILES['imageStudio']['name']),
    
    //             'nama_err' => '',
    //             'lokasi_err' => '',
    //             'deskripsi_err' => '',
    //             'image_err' => ''
    //         ];

    //         if (empty($data['nama'])) {
    //             $data['nama_err'] = 'Please Fill Studio Name';
    //         }

    //         if (empty($data['lokasi'])) {
    //             $data['lokasi_err'] = 'Please Fill Studio Location';
    //         }

    //         if (empty($data['deskripsi'])) {
    //             $data['deskripsi_err'] = 'Please Fill Studio Description';
    //         }

    //         if (empty($data['image'])) {
    //             $data['image_err'] = 'Please Upload Studio Image';
    //         }

    //         if (isset($_POST['add-studio'])) {
    //             $file = $_FILES['imageStudio'];

    //             $filename = time() . '_' . $_FILES['imageStudio']['name'];
    //             $fileTmp = $_FILES['imageStudio']['tmp_name'];
    //             $fileError = $_FILES['imageStudio']['error'];

    //             $fileExt = explode('.', $filename);
    //             $fileActualExt = strtolower(end($fileExt));

    //             $allowed = array('jpg','jpeg','png');

    //             if (in_array($fileActualExt,$allowed)) {
    //                 if ($fileError === 0) {
    //                     if (empty($data['nama_err']) && empty($data['lokasi_err']) && empty($data['deskripsi_err']) && empty($data['image_err'])) {
    //                         $fileNewName = explode('_', $filename);
    //                         $fileDestination = PUBLICPATH.'/public/upload/studio/'.end($fileNewName);
    //                         move_uploaded_file($fileTmp, $fileDestination);

    //                         $dataTambah = $this->stdModel->tambah($data);
                            
    //                         if ($dataTambah) {
    //                             // $this->view('studio/index', $data);
    //                             redirect('studio/index');
    //                         }
    //                     }else{
    //                         // $data['judul'] = 'Form New Studio';
    //                         $this->view('studio/tambah', $data);
    //                     }

    //                     ;
    //                 } else {
    //                     echo "There was an Error Uploading Your File";
    //                 }
    //             }else {
    //                 echo "You Cannot Upload of This Type";
    //             }
    //         }
    //         else{
    //             // $data['judul'] = 'Form New Studio';
    //             $this->view('studio/tambah', $data);
    //         }
    //     }
    //     else {
    //         $data = [
    //             'nama' => '',
    //             'lokasi' => '',
    //             'deskripsi' => '',
    //             'image' => '',
    
    //             'nama_err' => '',
    //             'lokasi_err' => '',
    //             'deskripsi_err' => '',
    //             'image_err' => ''
    //         ];
    //         $data['judul'] = 'Form New Studio';
    //         $this->view('studio/tambah', $data);
    //     }
    // }

    // public function update($id)
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    //         $data = [
    //             'id' => $id,
    //             'nama' => trim($_POST['nama']),
    //             'lokasi' => trim($_POST['lokasi']),
    //             'deskripsi' => trim($_POST['deskripsi']),
    //             // 'image' => trim($_POST['image'])
    //         ];

    //         if (!empty($data['nama']) && !empty($data['lokasi']) && !empty($data['deskripsi'])) {
    //             $dataUpdate = $this->stdModel->edit($data);
    //             if($dataUpdate){
    //                 redirect('studio/index');
    //             }
    //         }
    //     } else {
    //         $std = $this->stdModel->getStudio($id);
    //         echo "<pre>",var_dump($std),"</pre>";
    //         echo "<pre>",print_r($std),"</pre>";
    //         $data = [
    //             'studio' => $std
    //         ];
        
    //         $this->view('studio/update', $data);
    //         // echo "<pre>",var_dump($data),"</pre>";
    //     }
    // }

    // public function hapus($id)
    // {   
    //     $data = $this->stdModel->getStudio($id);

    //     if ($this->stdModel->delete($id)) {

    //         $fileName = $data['image'];
    //         $file = PUBLICPATH.'/public/upload/studio/'.$fileName;
    //         unlink($file);

    //         redirect('studio/index');
    //     } else {
    //         die('ada yang salah');
    //     }
    // }
}