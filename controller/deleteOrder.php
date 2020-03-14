<?php

// $id = $_POST['id'];
$id = $_GET['del_id'];
echo $id;
include '../connection/connection.php';
global $conn;
session_start();
$loggedUser = $_SESSION['id'];
echo "delete  from orders
where orders.order_id=$id  and orders.user_id=$loggedUser";
$result1 = $conn->query("delete  from products_items
where products_items.order_id=$id");
$result2 = $conn->query("delete  from orders
    where orders.order_id=$id  and orders.user_id=$loggedUser");
header("Location:../views/myOrders.php");
// echo '../views/myOrders.php';





?>`gjg