<?php
    session_start();

    include '/rb/rb.php';

    R::setup(
        'mysql:host=127.0.0.1;dbname=tcd2024',
        'root',
        ''
    );

    $usuario = R::findAll('usuarios');

    foreach ($usuario as $nome) {
        if($nome['nome'] == $_GET['nome']){
            $_SESSION['nome'] = $_GET['nome'];
            header('Location:ambiente.php');
        } else {
            header('Location:index.php?usuario=null');
        }
    }

    // if ($usuario == null) {
    //     header('Location:index.php?usuario=null');
    // } else {
    //     $_SESSION['nome'] = $_GET['nome'];
    //     header('Location:ambiente.php');
    // }
?>