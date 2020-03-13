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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <style>
       
        img {
            width: 150px;
            height: 150px;
        }

        #date {

            display: inline-block;
            margin-right: 150px;
            width: 250px;
        }
    </style>
</head>
<body class="hold-transition layout-top-nav"   style="background-repeat: no-repeat; background-size:cover">
    <div class="wrapper">
        <?php include '../partials/nav.php'; ?>
        <div class="container mt-4">
        <h1>Checks</h1>
    <br />
    <div style="display: inline-block;">
        <div class="form-group" id="date">
            <label>From</label>
            <input type="date" name="startDate" class="form-control" />
        </div>
        <div class="form-group" id="date">
            <label>To</label>
            <input type="date" name="endDate" class="form-control" />
        </div>

    </div>
    <div>
        <label> User</label>
    </div>
    <div class="form-group">
        <select class="form-control custom-select" name="User" style="width: 250px;">
        <?php
            $query="SELECT * from users";
            $result=mysqli_query($conn,$query);
            // $row1='';
        ?>
            <?php while($row1 = mysqli_fetch_array($result)):;?>

        <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

        <?php endwhile;?>
        </select>
    </div>
        <table class="table text-center">
            <thead class="bg-info">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <div id="accordion">
                    <div class="card w-100 m-auto ">
                        <tr>
                            <td><button class="btn btn-link" data-toggle="collapse" data-target="#cardone">+</button>
                            </td>
                            
                    <?php
                    $query="SELECT * from orders , users where orders.order_id=users.id  ";
                    
                    $result=mysqli_query($conn,$query);
                    $count=1;
                    ?>
                    <!-- <?php while($row = mysqli_fetch_assoc($result)) { ?> -->
                    <tr>
                        <td align="center"><?php echo $count; ?></td><td align="center">
                            <?php echo $row["name"]; ?></td><td align="center">
                            
                        </td>
                    </tr>
                    
                    <!-- <?php $count++; } ?> -->
                    </tr>
                </div>
            </div>
            </tbody>
            <tfoot class="bg-info">
                <tr>
                    <th colspan="3"></th>
                </tr>
            </tfoot>
        </table>




        <div class="card w-100 m-auto ">

            <div class="collapse show" id="cardone" data-parent="#accordion">
                <table class="table text-center">
                    <thead class="bg-info">
                        <tr>
                            <th>#</th>
                            <th>Other DAte</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><button class="btn btn-link" data-toggle="collapse" data-target="#cardone2">+</button>
                            <td>25/12/2019</td>
                            <td>60</td>
                        </tr>


                    </tbody>

                </table>


            </div>
        </div>

        <div class="card w-100 m-auto ">

            <div class="collapse show" id="cardone2" data-parent="#accordion">
                <div class="card-body text-center ">
                    <img src="../public/dist/img/photo1.png" class="rounded-circle ml-2" />
                    <!-- <img src="../public/dist/img/photo2.png" class="rounded-circle ml-2" />
                    <img src="../public/dist/img/photo3.jpg" class="rounded-circle ml-2" />
                    <img src="../public/dist/img/photo4.jpg" class="rounded-circle ml-2" /> -->
                </div>

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