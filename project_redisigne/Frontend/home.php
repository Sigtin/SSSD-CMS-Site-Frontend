<?php
// session code
session_start();
if(isset($_SESSION['IsAdmin'])){
    echo "Admin <br>";
    echo("<form action='home_vars.php' method='POST'>
             <label for='p_tag'>P</lable>
             <input type='text' name='p_tag'>
             <button>change</button>
         </form>");
}
$p_tag ="Def";
//end of session code
if(isset($_SESSION['Home_ptag'])){
    $p_tag = $_SESSION['Home_ptag'];
}
// the pages content 
echo("<p>".$p_tag."</p>");//ect
?>