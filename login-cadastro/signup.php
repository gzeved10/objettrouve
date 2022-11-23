<?php
session_start();
require 'config/constants.php';

$firstname = $_SESSION['signup-data']['firstname']?? null;
$lastname = $_SESSION['signup-data']['lastname']?? null;
$username = $_SESSION['signup-data']['username']?? null;
$email = $_SESSION['signup-data']['email']?? null;
$createpassword = $_SESSION['signup-data']['createpassword']?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword']?? null;
unset($_SESSION['signup-data']);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>81</title>
  <!---CSS--->
  <link rel="stylesheet" href="<?= ROOT_URL?>css/index.css">
  <!---font awesome-->
  <!--googlefonts-->
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">  
</head>
   <body>
    <section class="form_section">
        <div class="form_section-container">
            <h2>Cadastro</h2>
            <?php
            if (isset($_SESSION['signup'])) : ?>
            <div class="alert_message error">
                <p>
                    <?= $_SESSION['signup'];
                    unset($_SESSION['signup']);
                    ?>
                </p>
            </div>
            <?php endif ?>
                <form action="<? ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
                    <input type="text" name="firstname" value="<?= $firstname?>" placeholder="Nome">
                    <input type="text" name="lastname" value="<?= $lastname?>" placeholder="Sobrenome">
                    <input type="text" name="username" value="<?= $username?>" placeholder="Usuário">
                    <input type="email" name="email" value="<?= $email?>" placeholder="Email">
                    <input type="password" name="createpassword" value="<?= $createpassword?>" placeholder="Criar Senha">
                    <input type="password" name="confirmpassword" value="<?= $confirmpassword?>" placeholder="Confirmar Senha">
                    <div class="form_control">
                        <label for="avatar">Avatar do Usuário</label>
                        <input type="file" name="avatar" id="avatar">
                    </div>
                     <button type="submit" name="submit" class="btn">Cadastrar</button>
                    <small>Você ja possui uma conta? <a href="signin.php">Login</a></small>
                    </form>
                </div>
            </section>  
</body>           
</html>
