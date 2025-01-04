<?php

class About extends controller{
  
  public function index ($nama = 'ananda', $pekerjaan = 'siswa'){
    $data['judul'] = 'about';
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  
  public function page(){
    
    $data['judul'] = 'page';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
  
  public function confG(){
    return 's';
  }
  
  public function conhughjhhhgg(){
    return 'a';
  }
  public function dhdhdjsisj(){
    return 'c';
  }
  
}