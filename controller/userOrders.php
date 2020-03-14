<?php 
var_dump($_POST['dateOne']);
$dateOne=$_POST['dateOne'];
$dateTwo=$_POST['dateTwo'];
include '../connection/connection.php';
// $users=[];
global $conn;
// echo "select * from orders where order_date between $dateOne and $dateTwo";
echo "select orders.*,products_items.amount,product.product_name,product.price,product.picture  from orders where order_date between '$dateOne' and '$dateTwo' join products_items on
orders.id = products_items.order_id join product on products_items.product_id = product.product_id";
$result = $conn->query("select orders.*,products_items.amount,product.product_name,product.price,product.picture  from orders where order_date between '$dateOne' and '$dateTwo' join products_items on
orders.id = products_items.order_id join product on products_items.product_id = product.product_id");
$row = mysqli_fetch_assoc($result);
    // $users[$row['id']]=$row['name'];
    var_dump($row);

?>