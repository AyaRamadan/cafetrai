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
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>img</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>tea</td>
                                        <td>
                                            <p>5 EGB</p>
                                        </td>
                                        <td><img src="" alt=""></td>
                                        <td>
                                            <a href="">edit</a>
                                            <a href="">delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>.2</td>
                                        <td>Nescafe</td>
                                        <td>
                                            <p>7 EGB</p>
                                        </td>
                                        <td><img src="" alt=""></td>
                                        <td>
                                            <a href="">edit</a>
                                            <a href="">delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>codffe</td>
                                        <td>
                                            <p>6 EGB</p>
                                        </td>
                                        <td><img src="" alt=""></td>
                                        <td>
                                            <a href="">edit</a>
                                            <a href="">delete</a>
                                        </td>
                                    </tr>

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