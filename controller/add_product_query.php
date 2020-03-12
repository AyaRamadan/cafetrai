<?php

include '../connection/connection.php';

    $errors =[];

    if ( isset($_POST['submit']) ) {
        $name = isset($_POST['name']) ?  $_POST['name'] :NULL;
        $image = isset($_POST['img']) ?  $_POST['img'] :NULL;
        $price = isset($_POST['price']) ?  $_POST['price'] :NULL;
        $category= isset($_POST['category']) ?  $_POST['category'] :NULL;
    }
    //validation
    if (empty($name)) {
        $errors[] = 'Please provide a product name.';
    }
    if(empty($price)){
        $errors[]="please provide a price of product";
    }
    if(empty($category)){
        $errors[]="please choose  a category of product";
    }

    // if (!is_dir(UPLOAD_DIR)) {
    //     mkdir(UPLOAD_DIR, 0777, true);
    // }


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        header('products.php');
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["img"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
        header('products.php');
        if (count($errors) == 0) {
            $img=$_FILES["img"]["name"];            
            $sql = "INSERT INTO product (product_name,price,picture,category)
             VALUES ('$name','$price','$img','$category')";
               $conn->query($sql);
               echo $conn->error;
               
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



    


   
    

?>