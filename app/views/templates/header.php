<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Halaman <?= $data['judul'] ?></title>
<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <style>
      @font-face {
        font-family: 'Poppins';
         src: url("<?= BASEURL;?>/fonts/Poppins-Regular.ttf");
      }
      body{
      font-family: 'Poppins', sans-serif;
      }
  </style>
</head>
<body>
  
<nav class="navbar navbar-expand-lg bg-light" >
  <div class="container-fluid container">
    <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
        <a class="nav-link" href="<?= BASEURL; ?>/Siswa">Siswa</a>
        <a class="nav-link" href="<?= BASEURL; ?>/About">About</a>
      </div>
    </div>
  </div>
</nav>