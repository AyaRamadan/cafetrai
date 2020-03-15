
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
            <a href="userHome.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item ">
            <a href="myOrders.php" class="nav-link">My orders</a>
          </li>
        
        </ul>

   
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
     
     
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <?php
                  echo "<img src='../uploads/{$_SESSION['picture']}' alt='User Avatar' class='img-size-50 mr-3 img-circle'>"
                ?>
            <span class="d-none d-md-inline"><?php echo $_SESSION['username']?></span>
          </a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
              class="fas fa-th-large"></i></a>
        </li>
      </ul>
    </div>
  </nav>