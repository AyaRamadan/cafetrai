<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="../public/dist/css/bootstrap.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="../public/dist/css/order.css" rel="stylesheet" />
    <link href="../public/dist/css/myOrders.css" rel="stylesheet" />
</head>

<?php
session_start();
$loggedUser = $_SESSION['id'];
$dateOne = '2020-3-1';
$dateTwo =  date("Y-m-d");
include '../connection/connection.php';
global $conn;
$result = $conn->query("select orders.* from orders
            where orders.order_date between '$dateOne' and '$dateTwo' and orders.user_id=$loggedUser");


?>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <?php include '../partials/userNav.php' ?>
        <div class="container">
            <h3>My Orders</h3>
            <div class="chooseDate">
                <form action="" method="post">
                    <label>Date from</label>
                    <input type="date" placeholder="Date from" name="dateOne" />
                    <i class="fa  fa-facebook-f fa-1x text-primary"></i>
                    <label>Date to</label>
                    <input type="date" placeholder="Date to" name="dateTwo" />
                    <i class="fa  fa-facebook-f fa-1x text-primary"></i>
                    <input type="submit" name="sumbitDates" value="sumbit" class="btn btn-primary">
                </form>
                <?php
                // session_start();
                $loggedUser = $_SESSION['id'];
                // var_dump($_POST['dateOne']);
                if (isset($_POST['dateOne'])) {
                    $dateOne = $_POST['dateOne'];
                }
                if (isset($_POST['dateTwo'])) {
                    $dateTwo = $_POST['dateTwo'];
                }
                include '../connection/connection.php';
                global $conn;

                if (isset($dateOne) && isset($dateTwo)) {
                    $result = $conn->query("select orders.* from orders
            where orders.order_date between '$dateOne' and '$dateTwo' and orders.user_id=$loggedUser");
                }


                ?>
            </div>
            <div class="card w-100 m-auto ">

                <table class="table text-center" id="accordion">
                    <thead class="bg-info">
                        <tr>
                            <th>Order Date</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if (isset($result)) {

                            while ($row = mysqli_fetch_array($result)) { ?>
                                <tr data-toggle="collapse" data-target="#or<?php echo $row['order_id'] ?>" class="accordion-toggle">
                                    <td>
                                        <span><?php echo $row['order_date'] ?></span>
                                        <!-- <button class="btn btn-link" data-toggle="collapse" data-target="#cardone2">+</button> -->
                                    </td>
                                    <td><?php echo $row['STATUS'] ?></td>
                                    <td><?php echo $row['cost'] ?> </td>
                                    <?php if ($row['STATUS'] == 'processing') { ?>
                                        <td><button class="btn btn-danger" id="<?php echo $row['order_id'] ?>">Cancel</button></td>
                                        <!-- onclick="deleteOrder(<#?php echo $row['order_id'] ?>,this)" -->

                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td colspan="6" class="hiddenRow">
                                        <div class="accordian-body collapse" id="or<?php echo $row['order_id'] ?>">
                                            <div class="card w-100 m-auto ">

                                                <div class="collapse show" id="cardone2" data-parent="#accordion">
                                                    <div class="card-body text-center displayOrderProduct ">
                                                        <ul>
                                                            <?php
                                                            $orderId = $row['order_id'];
                                                            $products = $conn->query("select * from products_items
                                             where order_id=$orderId");

                                                            if (isset($products)) {

                                                                while ($rowProduct = mysqli_fetch_array($products)) { ?>

                                                                    <li>
                                                                        <?php
                                                                        $productId = $rowProduct['product_id'];
                                                                        $singleProduct = $conn->query("select * from product
                                                              where product_id=$productId");
                                                                        while ($myProduct = mysqli_fetch_array($singleProduct)) {
                                                                        ?>
                                                                            <img src="../uploads/<?php echo $myProduct['picture'] ?>" />
                                                                            <span><?php echo $myProduct['product_name'] ?></span>
                                                                            <span id="productsAmount"><?php echo $rowProduct['amount'] ?></span>
                                                                    </li>
                                                                <?php
                                                                        }
                                                                ?>

                                                        <?php }
                                                            } ?>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                        <?php }
                        } ?>



                    </tbody>

                </table>

            </div>



        </div>
        <div class="prices">
            <span class="total">Total Price </span>

            <span id="totalPrice"> </span>
        </div>
    </div>




    <script src="../public/dist/js/popper.js"></script>
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/dist/js/adminlte.min.js"></script>
    <script>
        function deleteOrder(id, event) {

            $.ajax({
                method: "post",
                url: "http://localhost/admin/controller/deleteOrder.php",
                data: {
                    id: id
                },
                // contentType:"application/json",
                // dataType: "text",
                success: function(result) {
                    // event.parentNode.parentNode.parentNode.removeChild(event.parentNode.parentNode);
                    console.log(result);
                },
                error: function(error) {
                    console.log(error)
                }


            });
        }
        $(".accordion-toggle button").click(function(e) {
            // $.ajax({
            //     method: "post",
            //     url: "http://localhost/admin/controller/deleteOrder.php",
            //     data: {
            //         id:e.target.id
            //     },
            //     // contentType:"application/json",
            //     // dataType: "text",
            //     success: function(result) {
            //         // event.parentNode.parentNode.parentNode.removeChild(event.parentNode.parentNode);
            //         console.log(result);
            //     },
            //     error: function(error) {
            //         console.log(error)
            //     }


            // });
            window.location.href = "../controller/deleteOrder.php?del_id=" + event.target.id + "";
            e.stopPropagation();
        });
        const costArr = $(".accordion-toggle td:nth-child(3)").text().split('LE');
        costArr.pop();
        let cost = costArr.reduce((a, b) => parseInt(a) + parseInt(b));
        $('#totalPrice').text(cost);
    </script>
</body>

</html>