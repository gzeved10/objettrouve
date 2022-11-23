<?php
session_start();
require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ??null;
$password = $_SESSION['signin-data']['password'] ??null;

unset($_SESSION['signin-data']);
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
<body>

    <section class="form_section">
        <div class="form_section-container">
            <h2>Login</h2>
           <?php if(isset($_SESSION['signup-sucess'])) : ?>
            <div class="alert_messagge sucess">
                <p>
                    <?= $_SESSION['signup-sucess'];
                    unset($_SESSION['signup-sucess']);
                    ?>
                </p>
            </div>
            <?php elseif (isset($_SESSION['signin'])) : ?>
            <div class="alert_messagge error">
                <p>
                    <?= $_SESSION['signin'];
                    unset($_SESSION['signin']);
                    ?>
                </p>
            </div>
            <?php endif ?>
                <form action="<?= ROOT_URL?>signin-logic.php" method="POST">
                    <input type="text" name="username_email" value="<?= $username_email?>" placeholder="Usuário ou Email">
                    <input type="password" name="password" value="<?= $password?>" placeholder="Senha">
                     <button type="submit" name="submit" class="btn">Entrar</button>
                    <small>Você não possui uma conta? <a href="cadastro.php">Cadastrar</a></small>
                    </form>
                </div>
            </section>


        </body>
</html>