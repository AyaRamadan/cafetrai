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
            width: 200px;
            height: 200px;
        }

       
    </style>
</head>
<body class="hold-transition layout-top-nav"  background="../public/dist/img/11.jpg" style="background-repeat: no-repeat; background-size:cover">
    <div class="wrapper">
        <?php include '../partials/nav.php'; ?>
        <div class="container mt-4">
        <h1>Orders</h1>
    <br />
   
        <table class="table text-center">
            <thead class="bg-info">
                <tr>
                    <th>Order date</th>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Ext.</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <div id="accordion">
                    <div class="card w-100 m-auto ">
                        <tr >
                            <td> <button class="btn btn-link" data-toggle="collapse" data-target="#cardone">+</button> 22/5</td>
                            <td>Ahmed</td>
                            <td>1000</td>
                            
                        </tr>

                    </div>
                </div>

            </tbody>
            <tfoot class="bg-info">
                <tr>
                    <th colspan="5"></th>
                </tr>
            </tfoot>
        </table>




 

        <div class="card w-100 m-auto ">

            <div class="collapse show" id="cardone" data-parent="#accordion">
                <div class="card-body text-center ">
                    <img src="../public/dist/img/photo1.png" class="rounded-circle ml-2" />                    
                    <img src="../public/dist/img/photo2.png" class="rounded-circle ml-2" />
                    <img src="../public/dist/img/photo3.jpg" class="rounded-circle ml-2" />
                    <img src="../public/dist/img/photo4.jpg" class="rounded-circle ml-2" />
                    
                </div>
                <span style="margin-left: 220px; position:relative">00</span>
                <span style="margin-left: 200px;  position:relative">00</span>
                <span style="margin-left: 195px;  position:relative">00</span>
                <span style="margin-left: 190px;  position:relative">00</span>
                

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