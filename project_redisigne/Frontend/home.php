<?php
include 'home_vars.php';
// session code
session_start();
if(isset($_SESSION['IsAdmin'])){
    echo "Admin <br>";
    echo("<form action='' method='POST'>
             <label for='p_tag'>P</lable>
             <input type='text' name='p_tag'>
             <button>change</button>
         </form>");
}
//end of session code
if($_POST){
    $p_tag = $_POST['p_tag'];
}else{
    $p_tag = "Hello";
}
echo $_POST['p_tag'];
// the pages content 
echo("<p>".$p_tag."</p>");//ect
?>