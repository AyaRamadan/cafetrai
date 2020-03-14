<?php
    include('../connection/connection.php');
?> 

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
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <?php include '../partials/nav.php'; ?>
        <div class="container mt-4">

            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Products</h3>
                            <h3 class="card-title" style="float: right;"><a href="./addProduct.php">Add new product</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr align="center">
                                        <th style="width: 10px">#</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>img</th>
                                        <th>category</th>
                                        <th colspan="2">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query="SELECT * from product  ";
                                        
                                        $result=mysqli_query($conn,$query);
                                        $count=1;
                                    ?>
                                   <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr><td align="center"><?php echo $count; ?></td><td align="center">
                                        <?php echo $row["product_name"]; ?></td><td align="center">
                                        <?php echo $row["price"]; ?></td><td align="center">
                                        
                                        <?php echo"<img src='../uploads/{$row['picture'] }' style='width:80px;height:130px'; ";?></td><td align="center">
                                        <?php echo $row["category_id"]; ?></td><td align="center">
                                        <a href="../controller/edit_product.php?id=<?php echo $row["product_id"] ?>">
                                            <button type="button" class="btn btn-info">Edit</button>
                                        </a></td><td align="center">
                                        <a href="../controller/delete_product.php?id=?id=<?php echo $row["product_id"] ?>">
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </a></td>
                                    </tr>
                                    <?php $count++; } ?>
                                    
                                </tbody>
                            </table>
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