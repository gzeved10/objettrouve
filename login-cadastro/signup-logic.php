<?php
session_start();
require 'config/database.php';

//singup from data
if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'],
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'],
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'],
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'],
    FILTER_VALIDATE_EMAIL);
    $creatpassword = filter_var($_POST['creatpassword'],
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'],
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    //validando valores
    if (!$firstname) {
        $_SESSION['signup'] = "Por favor escreva seu nome";
    }elseif (!$lastname) {
        $_SESSION['signup'] = "Por favor escreva seu sobrenome";
    }elseif (!$username) {
        $_SESSION['signup'] = "Por favor escreva seu usuário";
    }elseif (!$email) {
        $_SESSION['signup'] = "Por favor escreva um email válido";
    }elseif (strlen(!$creatpassword) < 8 || strlen($confirmpassword) <8) {
        $_SESSION['signup'] = "Por favor crie uma senha com 8+ caracteres";
    }elseif (!$avatar['name']) {
        $_SESSION['signup'] = "Por favor adicione seu avatar";
    } else{
        //checar senhas não iguais
        if ($creatpassword !== $confirmpassword) {
            $_SESSION['signup'] = "As senhas não combinam";
        }else {
            //combinou
            $hashed_password = password_hash($creatpassword, PASSWORD_DEFAULT);

            //check user ou email ja existe na database
            $user_check_query = "SELECT * FROM usuarios WHERE username= '$username' OR email='$email'";
            $user_check_query = mysqli_query($connection, $user_check_query);
        if (mysqli_num_rows($user_check_result) > 0){
            $_SESSION['signup'] = "Usuário ou Email já existe";
        
        } else {
            //modificar avatar
            //renomiar avatar
            $time= time(); // torne cada nome de imagem único usando o carimbo de data/hora atual
            $avatar_name = $time .  $avatar['name'];
            $avatar_tmp_name = $avatar['tmp_name'];
            $avatar_destination_path = 'images/' . $avatar_name;
            
            // converter arquivo em imagem
            $allowed_files = ['png', 'jpg', 'jpeg'];
            $extention = explode('.', $avatar_name);
            $extention = end($extention);
            if(in_array($extention, $allowed_files)) {
                //imagem não muito largas 
                if($avatar['size'] < 1000000) {
                    //upload avatar
                    move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                }else {
                    $_SESSION['signup'] = "Esse arquivo é muito grande. Deve ser meno que 1mb";
                }
            } else {
                $_SESSION['signup'] = "O arquivo dve ser png, jpg ou jpeg";
            }
        }
    }
} 

//redirecionar de volta para a pagina de cadastro se houver algum problema
if (isset($_SESSION['signup'])) {
    //pass from data 
    $_SESSION['signup-data'] = $_POST;
    header('location: ' . ROOT_URL . 'signup.php');
    die();
} else {
    //inserir novo usuário na tabela 
    $insert_user_query = "INSERT INTO usuarios SET firstname='$name', lastname='$lastname', 
    username='$username', email = '$email', password='$hashed_password', avatar='$avatar', 
    is_admin=0"; 
    $insert_user_result = mysqli_query($connection, $insert_user_query);

    if(!mysqli_errno($connection)) {
        // redirecionar para login com mensagem de sucesso
        $_SESSION['signup-sucess'] = "Registrado com sucesso. Por Favor entre";
        header('location: ' .ROOT_URL. 'signin.php');
        die(); 
    }
}}
else {
    //if button
    header('location: ' . ROOT_URL . 'signup.php');
    die();
}