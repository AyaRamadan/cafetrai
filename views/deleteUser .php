<?php

$conn = new mysqli("localhost", "root", "", "cafeteria"); 
   
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$delete=$_GET['delUser'];
echo $delete;
$sql="DELETE FROM users WHERE  id = '{$delete}'";



// sql to delete a record
// $sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: /admin/views/users.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>