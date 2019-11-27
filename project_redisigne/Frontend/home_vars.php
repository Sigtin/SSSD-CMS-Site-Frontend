<?php
session_start();
if(isset($_POST['p_tag'])){
    $_SESSION['Home_ptag'] = $_POST['p_tag'];
    echo $_POST['p_tag'];
    header("Location: home.php");
    exit();
}


?>