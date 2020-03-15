<?php
session_start();
$conn = new mysqli("localhost", "root", "", "cafeteria"); 
   
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$delete=$_GET['delUser'];
echo $delete;
$sql="DELETE FROM users WHERE  id ={$delete}";

if (mysqli_query($conn,$sql)){
    echo "row deleted successfully ";
    header('Location: /admin/views/users.php');
}
else{
    echo"sorry ";
    mysqli_error($conn);
}
mysqli_close($conn)
?>