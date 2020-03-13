<?php
session_start();
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
    if($_SESSION['username']=='admin'){
        header("Location:../views/adminHome.php?e=1");
    }else{
        header("Location:../views/userHome.php?e=1");
    }

}else{
    $result=$conn->query("insert into orders set user_id={$user}, notes='{$notes}', cost='{$cost}', room_no={$room}, status='processing'");
    $order_id=$conn->insert_id;
    $items="";
    foreach ($_POST as $item =>$count){
        $items=$items."({$order_id},'{$item}',{$count}),";
    }
    $items=rtrim($items,',');
    $result2=$conn->query("insert into  products_items values {$items} ");
    if($result2 && $result){
        if($_SESSION['username']=='admin'){
            header("Location:../views/adminHome.php");
        }else{
            header("Location:../views/userHome.php");
        }
    }else{
        if($_SESSION['username']=='admin'){
            header("Location:../views/adminHome.php?s=1");
        }else{
            header("Location:../views/userHome.php?s=1");
        }
    }
}    

?>