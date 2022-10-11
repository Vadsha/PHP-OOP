<?php

    session_start();

    if ($_POST['name'] && $_POST['password']) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['password'] = $_POST['password'];
        echo "hello nwar lay";
    }
    else{echo "error!";}
?>