

<?php
function save_page($new_page,$file_path){
    // will need a check if the file already exits it will overwrite the file  
    // you can chose if we rederect
    $new_page.="?>";
    $file = fopen($file_path,'w');
    if($file ===false){
        echo "Could not create new page";
    }
    if(fwrite($file, $new_page)){
        echo "Page Created";
    }
    fclose($file);
    //CHANGE re-derect to new page 
    // header("Location: home.php");
    // exit();
}

session_start();
$new_page ="<?php";
$file_path ="";
if(isset($_POST['title'])){
    // this is the format for all of the tags
    $content="";
    $content.= " echo '<title> ";
    $new_page.= $content;
    $new_page.= $_POST['title'];
    $new_page.= "</title>' ";
    $new_page.=";";
    
}
if(isset($_POST['section'])){
    $file_path = $_POST['section']; 
}
//if
// this cascads down with each new thing add 


save_page($new_page,$file_path);// needs to be last in the file 
?>