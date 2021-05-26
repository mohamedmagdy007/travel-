<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Traversal</title>
  <link href="dist/attention.css" rel="stylesheet">
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/all.css">
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="assets/css/mystyle.css">
  <!-- Template CSS -->
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="index.php">
            Traversal
          </a></h1>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.html">My Favorite </a>
            </li>
  
            <li class="nav-item ">
            <a class="nav-link">  <i class="fas fa-bell"></i> </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="bookingcart.php"><i class="fas fa-luggage-cart"></i> <span class="count-cart">
                <?php
                include_once "classes/Database.php";
                $db= new Database(); 
                $rs=$db->GetData("select count(bookingNo) from booking where userID='".$_SESSION["id"]."'");
                if($row=mysqli_fetch_assoc($rs)){
                  echo $row["count(bookingNo)"];
                }
                ?>
              </span>
            </a>
             </li>
          </ul>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle"></i>
          </button>
          <div class=" dropdown-menu">
            <a class=" dropdown-item" href="myprofile.php"><?php
              echo ($_SESSION['name']);
            ?></a>
            <a class=" dropdown-item" href="#">Another action</a>
            <a class=" dropdown-item" href="#">Something else here</a>
            <div class=" dropdown-divider"></div>
            <a class="  dropdown-item" href="logout.php"> <i class="fas fa-sign-out-alt"></i> Logout</a>
          </div>
        </div>


        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">

          <nav class="navigation">
            <div class="theme-switch-wrapper">

              <label class="theme-switch" for="checkbox">

                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>