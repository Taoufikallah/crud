  <?php

session_start();
  ?>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="logout.php">Log out </a> <span class="btn btn-info"> <?php echo "Mr : " .$_SESSION['droit']['login'];?> </span></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul>
    <!-- <form class="navbar-form navbar-left" action="afficher.php" method="get">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search..."  >
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form> -->
  </div>
</nav> 