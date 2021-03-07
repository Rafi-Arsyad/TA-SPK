<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'data_mahasiswa':
    include 'pages/data_mahasiswa.php';
    break;
  }
}else{
    include 'pages/home_admin.php';
  }
?>