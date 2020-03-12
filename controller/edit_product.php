<?php
    include('../connection/connection.php');
    
    ?>

<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM product WHERE product_id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['product_name'];
    $price = $res['price'];
    $picture = $res['picture'];
    $category=$res['category'];
}


if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $price=$_POST['price'];
    $category=$_POST['category'];  
    $picture=$_POST['img'];  
    
    // checking empty fields
    if(empty($name) || empty($price) || empty($category) || empty($picture)){            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($price)) {
            echo "<font color='red'>price field is empty.</font><br/>";
        }
        
        if(empty($category)) {
            echo "<font color='red'>category field is empty.</font><br/>";
        }   
        if(empty($picture)) {
            echo "<font color='red'>picture field is empty.</font><br/>";
        }     
    } else {    
        //updating the table
        
            $sql = "UPDATE product set product_name='" . $_POST["name"] . "',
             price='" . $_POST["price"] . "', category='" . $_POST["category"] . "',
              picture='" . $_POST["picture"] . "' WHERE product_id=$count";
            mysqli_query($conn,$sql);
            $message = "Record Modified Successfully";
        
        $select_query = "SELECT * FROM product WHERE product_id='" . $id . "'";
        $result = mysqli_query($conn,$select_query);
        $row = mysqli_fetch_array($result);
        //redirectig to the display page. In our case, it is index.php
        header("Location: ../views/products.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit product</title>
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
                        <h3 class="card-title">Edit product</h3>
                    </div>
                    <!-- /.card-header -->
                    

                    
                    
                            <div>
                            <!-- form start -->
                    <form role="form" method="get" action="../views/products.php" enctype="multipart/form-data">
                        <div class="card-body">
                            
                            <div class="form-group">
                                <label for="exampleInputName">Product</label>
                                <input type="text" name="name" value="<?php echo $name;?>"
                                class="form-control" id="exampleInputName" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPrice">Price</label>
                                <input type="number" class="form-control" 
                                value="<?php echo $price?>" id="exampleInputPrice" name="price" placeholder="Enter price">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category" value="<?php echo $category;?>">
                                    <?php
                                        $query="SELECT * from category";
                                        $result=mysqli_query($conn,$query);
                                        // $row1='';
                                    ?>
                                     <?php while($row1 = mysqli_fetch_array($result)):;?>

                                    <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

                                    <?php endwhile;?>   
                                </select>
                                <!-- <a href="category.php">Add a category</a> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Product picture</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="img" value="<?php echo $picture;?>"
                                         class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            <input type="submit" name="update" value="Update" class="btn btn-primary" >
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

