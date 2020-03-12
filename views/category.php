<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <div class="container">
            <div class="ml-md-5 col-md-8">
                <!-- general form elements -->
                <div class="card card-info mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Add Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="../controller/add_category.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleCatName">Name</label>
                                <input type="text" name="catName" class="form-control" id="exampleCatName" placeholder="Enter Name">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            <input type="submit" value="sumbit" class="btn btn-primary" name="submit">
                            <input type="reset" value="reset" class="btn bg-gradient-warning ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../public/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../public/dist/js/demo.js"></script>
        <!-- bs-custom-file-input -->
        <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                bsCustomFileInput.init();
            });
        </script>
</body>

</html>