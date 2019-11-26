<?php

    if($_POST['uname']&&$_POST['psw']){
      session_start();
      $_SESSION["IsAdmin"] = "True";
      header("Location:home.php");
      exit();
    }else{
        header("Location:home.php");
        exit();
    }
?>