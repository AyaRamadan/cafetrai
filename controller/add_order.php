<?php

include '../connection/connection.php';
global $conn;
$errors =[];

if ( isset($_POST['submit']) ) {
    $user = isset($_POST['user_id']) ?  $_POST['user_id'] :NULL;
    unset($_POST['user_id']);

    $notes = isset($_POST['notes']) ?  $_POST['notes'] :NULL;
    unset($_POST['notes']);

    $cost = isset($_POST['cost']) ?  $_POST['cost'] :NULL;
    unset($_POST['cost']);

    $room= isset($_POST['room-no']) ?  $_POST['room-no'] :NULL;
    unset($_POST['room-no']);
    unset($_POST['submit']);
}



if (empty($user)) {
    $errors[] = 'please select the user.';
}
if(empty($cost)){
    $errors[]="please select some items.";
}
if(empty($room)){
    $errors[]="please select the room.";
}


if($errors){
    var_dump($errors);
}else{
    $result=$conn->query("insert into orders set user_id={$user}, notes='{$notes}', cost='{$cost}', room_no={$room}, status='processing'");
    $order_id=$conn->insert_id;
    $items="";
    foreach ($_POST as $item =>$count){
        $items=$items."({$order_id},'{$item}',{$count}),";
    }
    $items=rtrim($items,',');
    $result2=$conn->query("insert into  products_items values {$items} ");
    if($result2){
        header("Location:../views/adminHome.php");
    }else{
        echo "insert into  products_items values {$items}";
        // echo $mysqli_error($result);
    }
}    

var_dump($_POST);
?>