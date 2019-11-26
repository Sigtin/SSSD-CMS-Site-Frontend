<?php
include 'home_vars.php';
// session code
session_start();
if(isset($_SESSION['IsAdmin'])){
    echo "Admin <br>";
    echo("<form action='home_vars.php' method='POST'>
             <label for='p_tag'>P</lable>
             <input type='text' name='p_tag'>
         </form>");
}
//end of session code


// the pages content 
echo("<p>".$p_tag."</p>");//ect
?>