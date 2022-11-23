<?php
require 'config/database.php';

if (isset($_SESSION['user-id'])) {
  $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
  $query = "SELECT avatar FROM usuarios WHERE id=$id";
  $result = mysqli_query($connection, $query);
  $avatar = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>81</title>
  <!---CSS--->
  <link rel="stylesheet" href="<?= ROOT_URL ?>css/index.css">
  <!---font awesome-->
  <!--googlefonts-->
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">  

<body>

  <nav>
    <div class="container nav_container">
      <a href="<?= ROOT_URL ?>" class="nav_logo">Objet</a>
      <ul class="nav_items">
        <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
        <li><a href="<?= ROOT_URL ?>about.php">Sobre</a></li>
        <li><a href="<?= ROOT_URL ?>chat.php">Serviços</a></li>
        <li><a href="<?= ROOT_URL ?>contact.php">Contato</a></li>
        <?php if (isset($_SESSION['user-id'])) : ?>
        <li class="nav_profile">
          <div class="avatar">
            <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?> ">
          </div>
          <ul>
            <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
            <li><a href="<?= ROOT_URL ?>admin/logout.php">Sair</a></li>
          </ul>
        </li>
        <?php else : ?>
          <li><a href="<?= ROOT_URL ?>signin.php">Logar</a></li>
      </ul>
      <?php endif ?>

      <button id="open_nav-btn"><i class="uil uil-multiply"></i></button>
      <button id="close_nav-btn"><i class="uil uil-bars"></i></button>
    </div>
  </nav>
  <!--------------------fim de nav------------------------->