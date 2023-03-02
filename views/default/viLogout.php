<?php
    session_start();
   // echo $_SESSION['login']['username'];
    unset($_SESSION['login']);
    echo $_SESSION['login']['username'];
    
    header('Location: index.php');
?>