<?php
session_start();
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        echo "<script>alert('Preencha todos os campos!'); window.location='../login.html';</script>";
        exit;
    }

    // email: adm@gmail.com
    // password: 123456

    if ($email === "adm@gmail.com" && $password === "123456") {
        $_SESSION['loggedin'] = true;
        $_SESSION['nome'] = "Administrador";
        header("Location: \\atividade_sw_php\\index.html");
    } else {
         header("Location: \\atividade_sw_php\\404.html");
    }
?>