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

<?php
    session_start();

    if($_GET['e']){
        $message = "please select some items for your order";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    if($_GET['s']){
        $message = "server couldn't be reached";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }    
?>


<?php
    include '../connection/connection.php';
    $users=[];
    global $conn;
    $result = $conn->query("select * from users");
    while($row = mysqli_fetch_assoc($result)) {
        $users[$row['id']]=$row['name'];
    }
    $products=[];
    $result2=$conn->query("select * from product");
    while($row = mysqli_fetch_assoc($result2)) {
        $products[]=$row;
    }

    $latest_order=[];

    $result3=$conn->query("SELECT * FROM orders join products_items on orders.order_id=products_items.order_id 
    AND user_id={$_SESSION['id']} join product on products_items.product_id=product.product_id where 
    orders.order_id= (select order_id from orders where user_id={$_SESSION['id']} order by orders.order_id DESC limit 1)");

    while($row = mysqli_fetch_assoc($result3)) {
        $latest_order[]=$row;
    }

    $result->free();
    $conn->close();
?>


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
                <div class="container" id="mainContainer">
                <label for="latestOrder">Your Latest Order</label>
                    
                <div class="row" id="latestOrder">
                    <div class="card">
                <div class="card-body">

                    <div class="col-lg-6">
                        <div class="card card-primary card-outline">
                        <label for="latestOrderCost">Total cost</label>

                        <input class="input-group-text" value=<?php echo $latest_order[0]['cost']?> id="latestOrderCost">
                        </input>

                        </div>
                        <div class="card card-primary card-outline">
                        <label for="lastorderdate">order date</label>

                        <input class="input-group-text" value=<?php echo $latest_order[0]['order_date']?> id="lastorderdate">
                        </input>

                        </div>
                    </div>
                </div>
                </div>
                    <div class="col-lg-6">
                        <div class="card card-primary card-outline">
                            <div class='row'>
                                
                            <?php
                                foreach($latest_order as $order){

                                   echo" 
                                   <div class='card'>
                                    <div class='card-body'>
                                   <img class='lastorderimg' src='../uploads/{$order['picture']}' >
                                   <div>
                                    <label >amount</label>
                                    <input class='input-group-text col-3' readonly value={$order['amount']}></input>
                                   </div>
                                   </div>
                                   </div>
                                   ";
                                }
                            
                            ?>
                            
                            </div>
                        </div>
                    </div>     
                </div>    
                    <form id="mainForm" action="../controller/add_order.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']?>"></input>
                                <div class="card ">

                                    <div class="card-body" id="orderItems">




                                    </div>
                                </div>

                                <div class="card card-primary card-outline">
                                    <div class="card-body">
                                        <label for="notesInput">Notes</label>                                            
                                        <input class="input-group-text" id="notesInput" name="notes">
                                        </input>
                                        <label for="totalPriceInput">Total Price</label>
                                        <input class="input-group-text" id="totalPriceInput" readonly name="cost" required>
                                        </input>

                                    </div>
                                    <div class="card card-primary card-outline">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">room</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="room-no">
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="5">Five</option>
                                        </select>
                                    </div>
                                </div>
                                    <button type="submit"  name="submit" class="btn btn-primary col-3  mt-lg-3 float-right">confirm</button>

                                </div><!-- /.card -->

                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-lg-6">


                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        foreach($products as $item){
                                            echo "<img class='menuItem' src='../uploads/{$item['picture']}' data-id='{$item['product_id']}' data-price='{$item['price']}' data-name='{$item['product_name']}'/>";
                                        }
                                        ?>
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
    <!-- custom Page script -->
    <script src="js/home.js"></script>
</body>

</html>