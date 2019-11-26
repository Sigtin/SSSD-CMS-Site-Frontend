<?php

if(isset($_POST['p_tag'])){
    $p_tag = $_POST['p_tag'];
    echo $p_tag;
    header("Location: home.php");
    exit();
}else{
    $p_tag = "Fuck";
}


?>