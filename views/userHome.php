<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
    <!-- custom stylesheet -->
    <link href="css/home.css" rel="stylesheet">
</head>



<script>

<?php 
$status="processing";

?>

if(true){
    let x= "<?php echo $status?>"
    console.log(x);
    
}
</script>



<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include '../partials/nav.php'; ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> Top Navigation <small>Example 3.0</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                                <li class="breadcrumb-item active">Top Navigation</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body" id="orderItems">
                                       
                                            
                                       

                                    </div>
                                </div>

                                <div class="card card-primary card-outline">
                                    <div class="card-body">
                                        <h1 class="card-title">notes</h1>

                                        <input class="input-group-text">
                                        </input>

                                    </div>
                                    <div class="btn-group">

                                        <button type="button" class="btn btn-info col-6 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            room
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary col-3  mt-lg-3 float-right">confirm</button>

                                </div><!-- /.card -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-lg-6">


                                <div class="card">
                                    <div class="card-body">
                                        <img class="menuItem" src="../public/products-images/coffee.png" id="coffee" alt="10 LE"/>
                                        <img class="menuItem" src="../public/products-images/mint.png" id="tea" alt="6 LE"/>
                                        <img class="menuItem" src="../public/products-images/green-tea.png" id="grean_tea" alt="8 LE"/>
                                        <img class="menuItem" src="../public/products-images/nescafe.png" id="nescafe" alt="12 LE"/>
                                        <img class="menuItem" src="../public/products-images/cappuccino.png" id="cappuccino" alt="15 LE"/>
                                        <img class="menuItem" src="../public/products-images/cola.png" id="cola" alt="10 LE"/>
                                        <img class="menuItem" src="../public/products-images/pepsi.png" id="pepsi" alt="10 LE"/>
                                        <img class="menuItem" src="../public/products-images/milkshake.png" id="milkshake" alt="15 LE"/>
                                        <img class="menuItem" src="../public/products-images/limon.png" id="limon" alt="15 LE"/>
                                        <img class="menuItem" src="../public/products-images/strawbary.png" id="strawbary" alt="15 LE"/>
                                        <img class="menuItem" src="../public/products-images/croissant.png" id="croissant" alt="10 LE"/>
                                        <img class="menuItem" src="../public/products-images/donuts.png" id="donuts" alt="15 LE"/>
                                    </div>
                                </div>

                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                    </form>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../public/dist/js/demo.js"></script>
    <!-- custom Page script -->\
    <script src="js/home.js"></script>
</body>

</html>