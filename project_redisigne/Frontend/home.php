
<!-- you might be able to put this into a php echo and include it in when creating a page -->
<script type="text/javascript">
// makes a call to the api 
// in js save any file that is not already in the project 
   function load_pages_from_database() {
    console.log("Loaded");
    // var xhr = new XMLHttpRequest();
    // xhr.open("GET", "", true); add the url to the back end
    // xhr.send(null);
    // return xhr.responseText;

    // check if the file exists if false write the file 

    }
    load_pages_from_database();
    
</script>
<?php
// this is the basic templet for all "hand made" pages

// session code
session_start();
if(isset($_SESSION['IsAdmin'])){
    echo "Admin <br>";
    // editing 
    echo("<form action='home_edit_page.php' method='POST'>
             <label for='p_tag'>P</lable>
             <input type='text' name='p_tag'>
             <button>change</button>
         </form>");
    //creating you can add more// the for='name' is the key to get them out of the post
    echo "<br><br>Create New Page<br>";
    echo("<form action='home_create_page.php' method='POST'>
            <label for='section'>File Path/ Section</lable>
            <input type='text' name='section'><br>
            <label for='title'>Title</lable>
            <input type='text' name='title'><br>
            <label for=''>P Tag</lable>
            <input type='text' name=''><br>
            <button>Create</button> 
    </form>");
}
//end of session code

$p_tag ="Def";// this is the defalted text of the page 
if(isset($_SESSION['Home_ptag'])){
    $p_tag = $_SESSION['Home_ptag'];
}
// the pages content 
echo("<p>".$p_tag."</p>");//ect
?>