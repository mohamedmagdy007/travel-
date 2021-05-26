<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Traversal</title>
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

<?php
session_start();
if (isset($_SESSION["id"])) { ?>
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
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
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
              <a class="nav-link"> <i class="fas fa-bell"></i> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bookingcart.php"><i class="fas fa-luggage-cart"></i> <span class="count-cart">
                  <?php
                  include_once "classes/Database.php";
                  $db = new Database();
                  $rs = $db->GetData("select count(bookingNo) from booking where userID='" . $_SESSION["id"] . "'");
                  if ($row = mysqli_fetch_assoc($rs)) {
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
<?Php } else {
?>

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
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services.php">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" aria-pressed="false" data-target="#exampleModal1" href="contact.html"> <span class="fa fa-sign-in"></span> Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" href="contact.html"><span class="fa fa-lock"></span> Sign in</a>
            </li>
          </ul>
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
<?Php } ?>


<section class="w3l-about-breadcrumb text-left">
  <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
    <div class="container">
      <h2 class="title">Destinations</h2>
      <ul class="breadcrumbs-custom-path mt-2">
        <li><a href="index.php">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Destinations </li>
      </ul>
    </div>
  </div>
</section>
<!-- //about breadcrumb -->
<!--  Work gallery section -->

<section id="travel" class="mt-5 mb-5">
  <div class="container">
    <div class="row">

      <?php


      include_once "classes/trips.php";
      $travel = new trips();
      $rs2 = $travel->GetAll();
      while ($row1 = mysqli_fetch_assoc($rs2)) {
    
      ?>
          <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card mb-3 " style="height: 510px;">
              <div class="modal-open zs-enabled">
                <img src="travels/<?php echo $row1["tripNo"] ?>a.jpg" class="card-img-top img-responsive img-fluid img-travel-hover " alt="...">
               
                <form  method="post">
                  <div class="favorite">
                    <button class="fov" type='submit' name="btnfavorite<?php echo $row1["tripNo"] ?>"><i class="fas fa-heart"></i></button>
                  </div>
                  </form>
                  <?php if($row1["offer"]==1){?> 
                  <div class="offer">
                    <p>special offer</p>
                  </div>
                    <?php } ?>
              </div>
              <div class="card-body">
                <p class="card-title"><i class="fas fa-map-marker-alt"></i> <?php echo $row1["name"] ?></p>
                <a href="detailstravel.php?tripNo=<?php echo $row1["tripNo"] ?>" class="link-hover">
                  <h5 class="card-text mb-1"><?php echo $row1["details"] ?></h5>
                  <p class="card-text"><?php echo $row1["detailsAR"] ?></p>
                </a>
                <div class="row justify-content-around">
                  <p><i class="far fa-clock"></i> <?php echo $row1["days"] ?> <span class="font-weight-bold">Days </span> </p>
                  <p><i class="far fa-clock"></i> <?php echo $row1["nights"] ?> <span class="font-weight-bold">Nights </span> </p>
                </div>
                <div class="pr-2 text-right">
                  <p>
                    <i class="input-icon field-icon fa"><svg width="10px" height="16px" viewBox="0 0 11 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                        <desc>Created with Sketch.</desc>
                        <defs></defs>
                        <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="Room_Only_Detail_1" transform="translate(-135.000000, -4858.000000)" fill="#ffab53" fill-rule="nonzero">
                            <g id="nearby-hotel" transform="translate(130.000000, 4334.000000)">
                              <g id="h1-g" transform="translate(5.000000, 136.000000)">
                                <g id="hotel-grid">
                                  <g id="price" transform="translate(0.000000, 383.000000)">
                                    <g id="thunder" transform="translate(0.000000, 5.000000)">
                                      <path d="M10.0143234,6.99308716 C9.91102517,6.83252576 9.73362166,6.73708716 9.54386728,6.73708716 L5.61404272,6.73708716 L5.61404272,0.561648567 C5.61404272,0.296666111 5.42877956,0.0676134793 5.16941114,0.0125959355 C4.90555149,-0.0435444154 4.64730587,0.0923152337 4.5395164,0.333718743 L0.0482883306,10.4389819 C-0.0291853536,10.6118942 -0.0123432484,10.8139994 0.0909549973,10.9723152 C0.194253243,11.1317538 0.371656752,11.2283152 0.561411138,11.2283152 L4.4912357,11.2283152 L4.4912357,17.4037538 C4.4912357,17.6687363 4.67649886,17.8977889 4.93586728,17.9528065 C4.97516552,17.9606661 5.01446377,17.9651573 5.05263921,17.9651573 C5.27046377,17.9651573 5.47369184,17.8382801 5.56576201,17.6316837 L10.0569901,7.5264205 C10.133341,7.35238541 10.1187445,7.15252576 10.0143234,6.99308716 Z" id="Shape"></path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                      <?php if($row1["offer"]==1){?> 
                    </i> <small> from</small> <span style="color:#d8207a ; font-weight: bold;"> $ <?php echo $row1["price"] - ($row1["price"] * $row1["discount"]) ?>  </span>
                    </p>
                    <p><span style="color:#d8207a ; font-weight: bold;"> <del>$ <?php  echo $row1["price"] ?></del>  </span></p>
                    <?php } else{ ?>
                      </i> <small> from</small> <span style="color:#d8207a ; font-weight: bold;">$ <?php echo $row1["price"] ?> </span>
                      <?php } ?>
                </div>
              </div>

            </div>
          </div>
        <?php } ?>
    </div>
  </div>
</section>
<?php
include_once "footer.php" ?>