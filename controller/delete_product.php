<?php
    include('../connection/connection.php');
    //getting id from url
    
    // $id=$_GET['id'];

    $sql = "DELETE FROM product WHERE product_id='" . $_GET["id"] . "'";
    mysqli_query($conn,$sql);
    
    header('Location: ../views/products.php');
    // echo "done";
?>

