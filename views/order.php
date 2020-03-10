<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="../public/dist/css/bootstrap.css" rel="stylesheet" />    
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <link href="../public/dist/css/order.css" rel="stylesheet" />
</head>
<body>

<?php include '../partials/userNav.php'?>
    <div class="container">
        <div class="row">
          
          <div class="orderAmount col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <form action="adminConfirmOrder.html" method="GET">
                <div id="orderProducts">

                    <div class="productToBuy">
                        <label>Tea</label>
                        <input type="number" value=""/>
                        <span>EGP 25</span>
                        <button>X</button>
                    </div>
                    <div class="productToBuy">
                        <label>coffee</label>
                        <input type="number" value=""/>
                        <span>EGP 25</span>
                        <button>X</button>
                    </div>
                    <div class="productToBuy">
                        <label>orange juice</label>
                        <input type="number" value=""/>
                        <span>EGP 25</span>
                        <button>X</button>
                    </div>
                    <div class="productToBuy">
                        <label>Tea</label>
                        <input type="number" value=""/>
                        <span>EGP 25</span>
                        <button>X</button>
                    </div>
                    <div class="productToBuy">
                        <label>coffee</label>
                        <input type="number" value=""/>
                        <span>EGP 25</span>
                        <button>X</button>
                    </div>
                    <div class="productToBuy">
                        <label>orange juice</label>
                        <input type="number" value=""/>
                        <span>EGP 25</span>
                        <button>X</button>
                    </div>
            </div>
                <div class="notes">
                    <h6>Notes</h6>
                    <textarea class="mt-2 form-control" style="resize:none;"></textarea>
                    <label>Room</label>
                    <select class="form-control custom-select">
                           <option >os</option>
                           <option>sd</option>
                           <option>mean stack</option>
                    </select>
                </div>
                <hr/>
                <h6>Total Price </h6>
                <span id="totalPrice">55 EGP</span>
                <input type="submit" value="Confirm" class="btn btn-danger">
            </form>
            </div>
             <div class="menuSection col-lg-8 col-md-12 col-sm-12 col-xs-12">
                
                    <h5>Latest Order</h5>
                    <div class="searchBox ">
                        <form action="#">
                            
                                <input type="search" placeholder="search"class="form-control"/>
                                <a href="#" ><span class="fa fa-facebook-f fa-2x text-primary" ></a>
                           
                        </form>
                    </div>
                    <div class="clear"></div>
                    <div class="latestOrder"> 
                        <ul>
                            <li>
                                    <img src="../public/dist/img/1.jpg"/>
                                    <span>tea</span>
                            </li>
                            <li>
                                    <img src="../public/dist/img/2.jpg"/>
                                    <span>tea</span>
                            </li>
                        </ul>
                    </div>
             <hr/>
                <div class="menuItems">

                    <ul>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/1.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/2.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/3.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/4.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/1.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/2.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/3.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/8.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/9.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/10.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/11.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                        <li>
                            <a href="#" >
                                <img src="../public/dist/img/12.jpg"/>
                                <span>tea</span>
                            </a>
                            <span id="productPrice">5 LE</span>
                        </li>
                    </ul>
                   
                   
                </div>
            </div>
        </div>
    </div>

    <footer>hello footer</footer>
  
    <script src="../public/dist/js/popper.js"></script>
    <!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
