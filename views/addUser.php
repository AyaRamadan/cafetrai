<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
span{
    color:red
}

</style>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<?php
session_start();
$errordata=[];
if(isset($_GET["error"]))
    $errordata=explode(',',$_GET["error"]);
?>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <?php include '../partials/nav.php'; ?>
        <div class="container">
            <div class="ml-md-5 col-md-8">
                <!-- general form elements -->
                <div class="card card-info mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Add User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action='/admin/controller/userControl.php' method="POST"enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">User Name</label>
                                <input type="text" name="userName" required class="form-control" id="exampleInputName" placeholder="Enter Name">
                                <span> <?php if(in_array("userName",$errordata))echo "  ** User Name is empty";?></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName"> Name</label>
                                <input type="text" name="name"required  class="form-control" id="exampleInputName" placeholder="Enter Name">
                                <span> <?php if(in_array("name",$errordata))echo "  ** Name is empty";?></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" required class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                                <span> <?php if(in_array("email",$errordata))echo "  **Email is empty";?></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" required  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                <span> <?php if(in_array("password",$errordata))echo "  **Password is empty";?></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">confirm password</label>
                                <input type="password" required class="form-control"name="passwordConfirm" id="exampleInputPassword1" placeholder="Password">
                                <span> <?php if(in_array("passwordConfirm",$errordata))echo "  **confirm password is empty";?></span>
                                <span> <?php if(in_array("password Dont match",$errordata))echo "  **confirm password  has to match password";?></span>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputRoomNum">Room Num</label>

                                <?php 
                           //-Connect To DB
    $connect=mysqli_connect("localhost","root","","cafeteria");
    
                        $selectRoomQuery = "SELECT * FROM rooms";
                        $resultSelectRoom = mysqli_query($connect,$selectRoomQuery) or die (mysqli_error($connect));
                  ?>    
                  
                          <select name="rooms"class='form-control'required >
                              <option value="" >Select room</option>
                              <!-- Loop For Fetch Result -->        
                              <?php while($rowRoom = mysqli_fetch_array($resultSelectRoom) ) : ?>
                               <option value="<?php echo($rowRoom['name']);?>" ><?php echo($rowRoom['name']);?></option>
                              <?php endwhile; ?> 
                              <!-- End Loop for Fetch Result -->
                      </select>
                            </div>
                            <span> <?php if(in_array("rooms",$errordata))echo " room number ** is empty";?></span>
                            <div class="form-group">
                                <label for="exampleExt">Ext</label>
                                <input type="text" required class="form-control" id="exampleExt" name="ext" placeholder="phone Num">
                                <span> <?php if(in_array("ext",$errordata))echo "  **phone field is empty";?></span>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Profile picture</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" required  name="uploadUserImage" id="uploadUserImage"class="custom-file-input" >
                                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>

                                    </div>
                                    <!-- <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>  -->

                                    <span> <?php if(in_array("uploadUserImage",$errordata))echo "  **please choose image";?></span>

                                   
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            <input type="submit"name="addUser" value="sumbit" class="btn btn-primary">
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