

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
		.error {
			color:red;
		}
        span{
            color:red;
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

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <?php include '../partials/nav.php'; ?>
        <div class="container">
            <div class="ml-md-5 col-md-8">
                <!-- general form elements -->
                <div class="card card-info mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Edit User</h3>
                    </div>
                    <?php
                   session_start();
 $connect=mysqli_connect("localhost","root","","cafeteria");
 if($connect){
   $res=  mysqli_query($connect,"select * from users where id='{$_GET['editUser']}'");
if($res){
$userData=mysqli_fetch_assoc($res);


}
 }

$errordata=[];
if(isset($_GET["error"]))
    $errordata=explode(',',$_GET["error"]);



?>
                <!-- form start -->
            <form role='form' action='/admin/controller/userControl.php?editUser=<?php echo $userData['id'] ?>' method='POST'enctype="multipart/form-data">
                <div class='card-body'> 
                
                    
                    <div class='form-group'>
                        <label for='exampleInputName'>Name</label> 
                        <input type='text' name='name' class='form-control'required  id='exampleInputName' placeholder='Enter Name' value="<?php echo $userData['name']?>" >
                        <span> <?php if(in_array('name',$errordata)) echo '** Name is empty';?></span>
                        </div>
                        <div class='form-group'>
                        <label for='exampleInputName'>User Name</label>
                        <input type='text' name='userName' class='form-control'required  placeholder='Enter Name' value="<?php echo$userData['username'] ?>">
                        <span> <?php if(in_array('userName',$errordata)) echo '** User Name is empty';?></span>
                        </div>
                    <div class='form-group'>
                        <label for='exampleInputEmail1'>Email address</label>
                        <input type='email' class='form-control'  required name='email' placeholder='Enter email'value="<?php echo $userData['email']?>">
                        <span> <?php if(in_array('email',$errordata)) echo '** Email is empty';?></span>
                    </div>
                    <div class='form-group'>
                        <label for='exampleInputPassword1'>Password</label>
                        <input type='password' name='password' class='form-control' required id='exampleInputPassword1' placeholder='Password'value="<?php echo$userData['password']?>">
                        <span> <?php if(in_array('password',$errordata)) echo '** Password is empty';?></span>
                    </div>
                    <div class='form-group'>
                        <label for='exampleInputPassword1'>confirm password</label>
                        <input type='password' class='form-control'required name="passwordConfirm" id='exampleInputPassword1' placeholder='Password' value="<?php echo$userData['password']?>">
                        <span> <?php if(in_array('password',$errordata)) echo '** Password is empty';?></span>
                    </div>
                    <div class='form-group'>
                        <label for='exampleInputRoomNum'>Room Num</label>
                        <?php 
                        
                        $selectRoomQuery = "SELECT * FROM rooms";
                        $resultSelectRoom = mysqli_query($connect,$selectRoomQuery) or die (mysqli_error($connect));
                  ?>    
                  
                          <select name="rooms"class='form-control'required >
                              
                              <option value="<?php echo $userData['room_no']?>"  ><?php echo $userData['room_no']?></option>
                              <!-- Loop For Fetch Result -->        
                              <?php while($rowRoom = mysqli_fetch_array($resultSelectRoom) ) : ?>
                                
                               <option value="<?php echo($rowRoom['name']);?>" ><?php echo($rowRoom['name']);?></option>
                              <?php endwhile; ?> 
                              <!-- End Loop for Fetch Result -->
                      </select>
                        <span> <?php if(in_array('roomNum',$errordata)) echo '** room number is empty';?></span>
                    </div>
                    <div class='form-group'>
                        <label for='exampleInputRoomNum'>Ext</label>
                        <input type='text' class='form-control'required  name='ext' placeholder='Phone number'value="<?php echo $userData['ext']?>">
                        <span> <?php if(in_array('ext',$errordata)) echo '** Phone number field is empty';?></span>
                    </div>
                    <div class="form-group">
                                <label for="exampleInputFile">Profile picture</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"  required name="uploadUserImage"class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>                                    
                                </div>
                                <span> <?php if(in_array("uploadUserImage",$errordata))echo "  **please choose image";?></span>

                    </div>
                    </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class='card-footer'>
                    
                    <input type='submit' value='UPDATE'  name ='updateUser'class='btn btn-primary'>
                </div>
            </form> 
            <form action='/admin/views/users.php'>
                <div class='card-footer'>
                    <button onclick="window.location.href='/admin/views/users.php'"  class='btn bg-gradient-warning '> Back </button>
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
      
</body>

</html>