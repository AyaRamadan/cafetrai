<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
    #userImage{
        width:100px;
        height:100px;
        border-radius:50%;
        border:1px solid #444;
    }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <?php include '../partials/nav.php'; ?>
     
    <?php
    $conn = new mysqli("localhost", "root", "", "cafeteria");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  *  FROM users";
$result = $conn->query($sql);
?>

        <div class="container mt-4">

            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Users</h3>
                            <h3 class="card-title" style="float: right;"><a href="./addUser.php">Add new User</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <?php
if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'>
    <thead>
        <tr>
            <th style='width: 10px'>#</th>
            <th>Name</th>
            <th>User Name</th>
            <th>Room</th>
            <th>img</th>
            <th>Ext</th>
            
            <th>action</th>
        </tr>
    </thead>
    <tbody>";
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];
        echo "<tr><td>".$row["id"]."</td><td>"
        .$row["name"]."</td><td>"
        .$row["username"]."</td><td>"
        .$row["room_no"]." </td><td align='center'>
        <img src='../uploads/userImages/{$row['picture'] }' id='userImage' > 
        </td><td>"
        .$row["ext"]."</td><td>
        <a  class='btn btn-info'href='/admin/views/editUser.php?editUser={$row['id']}' >edit</a>
        <a  class='btn btn-danger' href='/admin/views/deleteUser.php?delUser={$row['id']}' >delete</a>
       </td></tr>";
       
    }
    echo "  </tbody></table>";
}

else {
    echo "0 results";
}
$conn->close();
?>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- /.card -->

                </div>
            </div>
        </div>
    </div>

  <!-- jQuery -->
   <script src="../plugins/jquery/jquery.min.js"></script> 
   
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../public/dist/js/demo.js"></script>

</body>

</html>