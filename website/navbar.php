<?php
echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>';
      echo'
      <li class="nav-item">
        <a class="nav-link" href="general.php">General</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="senior.php">Senior</a>
    </li>';

    if(isset($_SESSION['superadmin'])){
      echo '
        <li class="nav-item">
        <a class="text-danger nav-link" href="users.php">SUPER ADMIN MENU</a>
        </li>
      ';
    }
    if(!isset($_SESSION['user'])!=""){
      echo '
      </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.php">Register</a>
    </li>
      ';
  }
    if(isset($_SESSION['user'])!=""){
        echo '
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
            <p>You are logged in as '.$_SESSION['user'].'</p>
            </li>
        ';
    }
    echo '
    <li>
        <a class="nav-link" href="logout.php">Logout</a>
    </li>
    </ul>
  </div>
</nav>
';
?>