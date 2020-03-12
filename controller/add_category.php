<?php

include '../connection/connection.php';
    $errors = [];
    if(isset($_POST['submit'])){
        $name =isset($_POST['catName']) ? $_POST['catName'] : NULL ;
    }
    //validation
    if(empty($name)){
        $errors[]="please enter a category";
    }
    //if admin enter the category name
    if(count($errors) == 0){
        $name=$_POST["catName"];
        echo $name;
        $sql="INSERT INTO `category`( `name`) VALUES ('$name')";
        $conn->query($sql);
    }else{
        echo "sorry ,there is an error";
    }
?>