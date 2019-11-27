<?php

// this is the templet for ediditing just do the same for any tag// the for='name' -> $_POST['name']
// remember to keep the session names clean so you dont get the wrong value
session_start();
if(isset($_POST['p_tag'])){
    $_SESSION['Home_ptag'] = $_POST['p_tag'];
    echo $_POST['p_tag'];
    header("Location: home.php");
    exit();
}


?>