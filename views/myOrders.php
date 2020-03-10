<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="../public/dist/css/bootstrap.css" rel="stylesheet" />
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <link href="../public/dist/css/order.css" rel="stylesheet" />
    <link href="../public/dist/css/myOrders.css" rel="stylesheet" />
</head>
<body>
    <?php include '../partials/userNav.php'?>
        <div class="container">
         <h3>My Orders</h3>
         <div class="chooseDate">
            <label>Date from</label>
            <input type="date" placeholder="Date from"/>
            <i class="fa  fa-facebook-f fa-1x text-primary"></i>
            <label>Date to</label>
            <input type="date" placeholder="Date to"/>
            <i class="fa  fa-facebook-f fa-1x text-primary"></i>
        </div>
         <table class="table text-center">
            <thead class="bg-info">
                <tr>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span>10/3/2020-3:00 AM</span>
                        <button class="btn btn-info">+</button>
                    </td>
                    <td>processing</td>
                    <td>55 EGP</td>
                    <td>CANCEL</td>
                </tr>
                <tr>
                    <td>
                        <span>10/3/2020-3:00 AM</span>
                        <button class="btn btn-info">+</button>
                    </td>
                    <td>Out Of Delivery</td>
                    <td>20 EGP </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <span>10/3/2020-3:00 AM</span>
                        <button class="btn btn-info">-</button>
                    </td>
                    <td>Done</td>
                    <td>29 EGP</td>
                    <td></td>
                </tr>

            </tbody>
         </table>
         <div class="container">
        <div id="accordion">
         <div class="card  w-100 m-auto ">
                <div class="card-header">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#cardtwo">Card Two</button>
                </div>
                <div class="collapse" id="cardtwo" data-parent="#accordion">
                    <div class="card-body displayOrderProduct text-center bg-warning">
                    <ul>
                        
                        <li>
                                    <img src="../public/dist/img/2.jpg"/>
                                    <span>tea</span>
                                    <span id="productPrice">5 LE</span>
                                    <span id="productsAmount">1</span>
                        </li>
                        <li>
                                <img src="../public/dist/img/2.jpg"/>
                                <span>tea</span>
                                <span id="productPrice">5 LE</span>
                                <span id="productsAmount">1</span>
                        </li>
                        <li>
                            <img src="../public/dist/img/2.jpg"/>
                            <span>tea</span>
                            <span id="productPrice">5 LE</span>
                            <span id="productsAmount">1</span>
                        </li>
                        <li>
                            <img src="../public/dist/img/2.jpg"/>
                            <span>tea</span>
                            <span id="productPrice">5 LE</span>
                            <span id="productsAmount">1</span>
                        </li> 
                         
                        
                    </ul>
                    </div>
                    
                </div>
            </div>


</div>
</div>
        </div>
        <h4>Total Price </h4>
        <span id="totalPrice">55 EGP</span>
  
    <script src="../public/dist/js/popper.js"></script>
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>