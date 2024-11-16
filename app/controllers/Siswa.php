<?php

class Siswa extends controller
{
  public function index()
  {
    $data["judul"] = "Daftar Siswa";

    $data["siswa"] = $this->model("Siswa_model")->getAllSiswa();

    $this->view("templates/header", $data);
    $this->view("siswa/index", $data);
    $this->view("templates/footer");
  }

  public function detail($id)
  {
    $data["judul"] = "Detail Siswa";

    $data["siswa"] = $this->model("Siswa_model")->getSiswaById($id);

    $this->view("templates/header", $data);
    $this->view("siswa/detail", $data);
    $this->view("templates/footer");
  }

  public function tambah()
  {
    if ($this->model("Siswa_model")->tambahDataSiswa($_POST) > 0) {
      Flasher::setFlash("Berhasil", "Ditambahkan", "success");
      header("Location: " . BASEURL . "/siswa");
      exit();
    } else {
      Flasher::setFlash("Gagal", "Ditambahkan", "danger");
      header("Location: " . BASEURL . "/siswa");
      exit();
    }
  }

  public function hapus($id)
  {
    if ($this->model("Siswa_model")->hapusDataSiswa($id) > 0) {
      Flasher::setFlash("Berhasil", "Dihapus", "success");
      header("Location: " . BASEURL . "/siswa");
      exit();
    } else {
      Flasher::setFlash("Gagal", "Dihapus", "danger");
      header("Location: " . BASEURL . "/siswa");
      exit();
    }
  }

  public function getubah()
  {
    echo json_encode($this->model("siswa_model")->getSiswaById($_POST["id"]));
  }

  public function ubah()
  {
    if ($this->model("Siswa_model")->ubahDataSiswa($_POST) > 0) {
      Flasher::setFlash("Berhasil", "Diubah", "success");
      header("Location: " . BASEURL . "/siswa");
      exit();
    } else {
      Flasher::setFlash("Gagal", "Diubah", "danger");
      header("Location: " . BASEURL . "/siswa");
      exit();
    }
  }
  
  public function store(){
    
  }
}
