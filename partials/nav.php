  <?php
    // session_start();
  ?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-lightblue">
    <div class="container">
     
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../controller/logout.php" class="nav-link">Logout</a>
          </li>
          <li class="nav-item">
            <a href="/admin/views/products.php" class="nav-link">Products</a>
          </li>
          <li class="nav-item ">
            <a href="/admin/views/users.php" class="nav-link">Users</a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">Manual order</a>
          </li>
          <li class="nav-item ">
            <a href="/admin/views/checks.php" class="nav-link">Checks</a>
          </li>
          <li class="nav-item ">
            <a href="/admin/views/orders.php" class="nav-link">Orders</a>
          </li>
        </ul>

   
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      
       
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" style="margin-top:-31px" data-toggle="dropdown">
                <!-- <?php
                 echo "<img src='../uploads/{$_SESSION['picture']}'  alt='User Avatar' class='img-size-50 mr-3 img-circle'>"
                ?>  -->
            <!-- <span class="d-none d-md-inline"><?php echo $_SESSION['username']?></span> -->
          </a>
        
        </li>
       
      </ul>
    </div>
  </nav>