<?php
    include("connectdb.php");
     if(isset($_POST['title'])){
 	 $title = $_POST['title'];
 	 echo $title;
     }
 
 if(isset($_POST['description'])){
 	 $description = $_POST['description'];
 	 echo $description;
     }

 if(isset($_POST['link'])){
 	 $link = $_POST['link'];
 	 echo $link;
     }  
  $upload_query = mysql_query("INSERT INTO elearning VALUES ('$title','$description','$link')");
 
?>