<?php
session_start();
    $errorArray=[];

    //-Connect To DB
    $connect=mysqli_connect("localhost","root","","cafeteria");
    
    
   

if(isset($_POST['addUser'])){

    if($connect){  
           
   //Query

   
   if(!isset($_POST['name']) || empty($_POST['name'])){
   
       $errorArray[]="name";
   }
   
   if(!isset($_POST['userName']) || empty($_POST['userName'])){
   
       $errorArray[]="userName";
   }
   
   if(!isset($_POST['email']) || empty($_POST['email']) || !filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)){
   
       $errorArray[]="email";
   }
   
   if(!isset($_POST['password']) || empty($_POST['password'])){
   
       $errorArray[]="password";
   }
   if(!isset($_POST['rooms']) || empty($_POST['rooms'])|| !filter_input(INPUT_POST,"rooms",FILTER_VALIDATE_INT)){
   
    $errorArray[]="rooms";
}
   if(!isset($_POST['ext']) || empty($_POST['ext']) || !filter_input(INPUT_POST,"ext",FILTER_VALIDATE_INT)){
   
       $errorArray[]="ext";
   }
   if ($_POST["password"] === $_POST["passwordConfirm"]) {
    $passwordConfirmed=$_POST["password"];
 }else{
     $errorArray[]="password Dont match";
 }
  




   if(count($errorArray)>0){
   
       header("Location:/admin/views/addUser.php?error=".implode(",",$errorArray));
      
           
   }else{
    $target_dir = "../uploads/userImages/";
    $target_file = $target_dir . basename($_FILES["uploadUserImage"]["name"]);
    echo "files are".$_FILES["uploadUserImage"]["name"];
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["uploadUserImage"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["uploadUserImage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


    $image=basename( $_FILES["uploadUserImage"]["name"]); // used to store the filename in a variable


            $name=mysqli_escape_string($connect,$_POST['name']);
            $userName=mysqli_escape_string($connect,$_POST['userName']);
            // $image=mysqli_escape_string($connect,$_POST['uploadUserImage']);
            $email=mysqli_escape_string($connect,$_POST['email']);
            $passwordConfirmed=mysqli_escape_string($connect,$_POST['password']);
            $roomNum=mysqli_escape_string($connect,$_POST['rooms']);
            $phone=mysqli_escape_string($connect,$_POST['ext']);
            $result= mysqli_query($connect,"insert into users set
            name='$name',
            username='$userName',
            email='$email',
            password='$passwordConfirmed',
            ext='$phone',
            room_no='$roomNum',
            picture='$image'
            ");
            if($result){
          
                header("Location:/admin/views/users.php");
                // echo "add user";
              }else{
                  echo "Error";
              }
        }
} 
}    
 
   
   
   else if(isset($_POST['updateUser'])){
 
    $editid=$_GET['editUser'];
    echo $editid;
    if(!isset($_POST['name']) || empty($_POST['name'])){
   
        $errorArray[]="name";
    }
    
    if(!isset($_POST['userName']) || empty($_POST['userName'])){
    
        $errorArray[]="userName";
    }
    
    if(!isset($_POST['email']) || empty($_POST['email']) || !filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)){
    
        $errorArray[]="email";
    }
    
    if(!isset($_POST['rooms']) || empty($_POST['rooms'])|| !filter_input(INPUT_POST,"rooms",FILTER_VALIDATE_INT)){
    
        $errorArray[]="rooms";
    }
    if(!isset($_POST['ext']) || empty($_POST['ext']) || !filter_input(INPUT_POST,"ext",FILTER_VALIDATE_INT)){
    
        $errorArray[]="ext";
    }
    if ($_POST["password"] === $_POST["passwordConfirm"]) {
        $passwordConfirmed=$_POST["password"];
     }else{
         $errorArray[]="password Dont match";
     }
    
    
    if(count($errorArray)>0){
    
        header("Location:/admin/views/editUser.php?editUser={$editid}?error=".implode(",",$errorArray));
            
    }else{
        $target_dir = "../uploads/userImages/";
        $target_file = $target_dir . basename($_FILES["uploadUserImage"]["name"]);
        echo "files are".$_FILES["uploadUserImage"]["name"];
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
        if (move_uploaded_file($_FILES["uploadUserImage"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["uploadUserImage"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    
    
        $image=basename( $_FILES["uploadUserImage"]["name"]); // used to store the filename in a variable
    
   
       $name=mysqli_escape_string($connect,$_POST['name']);
       $username=mysqli_escape_string($connect,$_POST['userName']);
       
       $email=mysqli_escape_string($connect,$_POST['email']);
       $roomNum=mysqli_escape_string($connect,$_POST['rooms']);
       $phone=mysqli_escape_string($connect,$_POST['ext']);
     
   
     $result= mysqli_query($connect,"
      update users set
      name='$name',
      password='$passwordConfirmed',
      username='$username',
      email='$email',
      room_no='$roomNum',
      ext='$phone' ,
      picture='$image' where 
      id='$editid'
      ");
     
      if($result){
       header("Location:/admin/views/users.php");
    // echo "update success";
   }else{
       echo "Error";
   }
   }
   
}
   
?>