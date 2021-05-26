<?php
ob_start();
session_start();
if (isset($_SESSION["id"])) {
  include_once "headerAfter.php";
} else {
  include_once "headerBefore.php";
}

?>
<!-- //header -->
<!--banner-slider-->
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
  <div class="banner-content">
    <div id="demo-1" data-zs-src='["assets/images/banner1.jpg", "assets/images/banner2.jpg","assets/images/banner3.jpg", "assets/images/banner4.jpg"]' data-zs-overlay="dots">
      <div class="demo-inner-content">
        <div class="container">
          <div class="banner-infhny">
            <h3>You don't need to go far to find what matters.</h3>
            <h6 class="mb-3">Discover your next adventure</h6>
            <div class="flex-wrap search-wthree-field mt-md-5 mt-4">
              <form action="#" method="post" class="booking-form">
                <div class="row book-form">
                  <div class="form-input col-md-4 mt-md-0 mt-3">

                    <select name="selectpicker" class="selectpicker">
                      <option value="">Destinaion</option>
                      <option value="africa">Africa</option>
                      <option value="america">America</option>
                      <option value="asia">Asia</option>
                      <option value="eastern-europe">Eastern Europe</option>
                      <option value="europe">Europe</option>
                      <option value="south-america">South America</option>
                    </select>

                  </div>
                  <div class="form-input col-md-4 mt-md-0 mt-3">

                    <input type="date" name="" placeholder="Date" required="">
                  </div>
                  <div class="bottom-btn col-md-4 mt-md-0 mt-3">
                    <button class="btn btn-style btn-secondary"><span class="fa fa-search mr-3" aria-hidden="true"></span> Search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /main-slider -->
<!-- //banner-slider-->

<!--/grids-->
<section class="w3l-grids-3 py-5">
  <div class="container py-md-5">
    <div class="title-content text-left mb-lg-5 mb-4">
      <h6 class="sub-title">Visit</h6>
      <h3 class="hny-title">Top Destinations</h3>
    </div>
    <form method="post">
      <div class="row bottom-ab-grids">

        <!--/row-grids-->
        <?php
        include_once "classes/department.php";
        $dept = new department();
        $rs = $dept->GetAll();
        while ($row = mysqli_fetch_assoc($rs)) {
          $d = $row["categoryNo"];
        ?>

          <div class="col-lg-3 subject-card  mt-4">
            <div class="subject-card-header p-4 p-lg-2">
              <a href="#" class="card_title p-lg-4d-block">
                <div class="row align-items-center justify-content-between ">
                  <div class="col-12 col-md-6 col-lg-12 subject-img   ">
                    <img src="department/<?php echo $row["categoryNo"] ?>.jpg" class="img-fluid" alt="">

                  </div>
                  <div class="col-12 col-md-4 col-lg-12 ">
                    <a href="travels.php?categoryNo=<?php echo $row["categoryNo"] ?>" name="<?php echo 'btntravels' . $d ?>" class="btn btn-secondary mt-2"> <?php echo $row["name"] ?> Holidays <i class="vc_btn3-icon fas fa-suitcase ml-1"> </i></a>
                  </div>
                </div>
              
              </a>
            </div>
          </div>
        <?php } ?>
        <!--//row-grids-->

      </div>
    </form>
  </div>
</section>
<!--//grids-->
<!-- stats -->
<section class="w3l-stats py-5" id="stats">
  <div class="gallery-inner container py-lg-0 py-3">
    <div class="row stats-con pb-lg-3">
      <div class="col-lg-3 col-6 stats_info counter_grid">
        <p class="counter">730</p>
        <h4>Branches</h4>
      </div>
      <div class="col-lg-3 col-6 stats_info counter_grid1">
        <p class="counter">1680</p>
        <h4>Travel Guides</h4>
      </div>
      <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
        <p class="counter">812</p>
        <h4>Happy Customers</h4>
      </div>
      <div class="col-lg-3 col-6 stats_info counter_grid2 mt-lg-0 mt-5">
        <p class="counter">990</p>
        <h4>Awards</h4>
      </div>
    </div>
  </div>
</section>
<!-- //stats -->

<section id="travel" class="w3l-grids-3 pt-5 ">
  <div class="container">
    <div class="title-content text-left mb-lg-5 mb-4">
      <h3 class="hny-title">Latest offers</h3>
    </div>
    <div class="row">
      <?php
      

        include_once "classes/trips.php";
        $travel = new trips();
        $rs2 = $travel->Getoffer();
        while ($row1 = mysqli_fetch_assoc($rs2)) {
          if ($row1["offer"] == 1) {

      ?>


            <div class="col-12 col-md-6 col-lg-4 ">
              <div class="card mb-3 " style="height: 550px;">
                <div class="modal-open zs-enabled">
                  <img src="travels/<?php echo $row1["tripNo"] ?>a.jpg" class="card-img-top img-responsive img-fluid img-travel-hover " alt="...">
                  <form  method="post">
                  <div class="favorite">
                    <button class="fov" type='submit' name="btnfavorite<?php echo $row1["tripNo"] ?>"><i class="fas fa-heart"></i></button>
                  </div>
                  </form>

                  <div class="offer">
                    <p>special offer</p>
                  </div>
                </div>
                <div class="card-body">
                  <p class="card-title"><i class="fas fa-map-marker-alt"></i> <?php echo $row1["name"] ?></p>
                  <a href="detailstravel.php?tripNo=<?php echo $row1["tripNo"] ?>" class="link-hover">
                    <h5 class="card-text mb-1"><?php echo $row1["details"] ?></h5>
                    <p class="card-text"><?php echo $row1["detailsAR"] ?></p>
                  </a>
                  <p><i class="far fa-clock"></i> <?php echo $row1["days"] ?> <span class="font-weight-bold">Days </span>  </p>
                                    <p><i class="far fa-clock"></i> <?php echo $row1["nights"] ?> <span class="font-weight-bold">Nights </span>  </p>
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
                      </i> <small> from</small> <span style="color:#d8207a ; font-weight: bold;"> $ <?php echo $row1["price"] - ($row1["price"] * $row1["discount"]) ?>  </span>
                    </p>
                    <p><span style="color:#d8207a ; font-weight: bold;"> <del>$ <?php  echo $row1["price"] ?></del>  </span></p>

                  </div>
                </div>
              </div>
            </div>
          <?php }  ?>
        <?php }  ?>
      
    </div>
  </div>
</section>

<!--/-->

<!-- //stats -->

<!--/w3l-bottom-->
<section class="w3l-bottom py-5">
  <div class="container py-md-4 py-3 text-center">
    <div class="row my-lg-4 mt-4">
      <div class="col-lg-9 col-md-10 ml-auto">
        <div class="bottom-info ml-auto">
          <div class="header-section text-left">
            <h3 class="hny-title two">Traveling makes a man wiser, but less happy.</h3>
            <p class="mt-3 pr-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
              voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
              amet adipisicing elit.</p>
            <a href="about.html" class="btn btn-style btn-secondary mt-5">Read More</a>
          </div>


        </div>
      </div>
    </div>
  </div>
</section>
<!--//w3l-bottom-->
<!-- testimonials -->
<section class="w3l-clients" id="clients">
  <!-- /grids -->
  <div class="cusrtomer-layout py-5">
    <div class="container py-lg-4 py-md-3 pb-lg-0">
      <div class="heading text-center mx-auto">
        <h6 class="sub-title text-center">Here’s what they have to say</h6>
        <h3 class="hny-title mb-md-5 mb-4">our clients do the talking</h3>
      </div>
      <!-- /grids -->
      <div class="testimonial-width">
        <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <span class="fa fa-quote-left" aria-hidden="true"></span>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                  voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                  amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                </blockquote>
                <div class="testi-des">
                  <div class="test-img"><img src="assets/images/c1.jpg" class="img-fluid" alt="client-img">
                  </div>
                  <div class="peopl align-self">
                    <h3>Rohit Paul</h3>
                    <p class="indentity">Example City</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <span class="fa fa-quote-left" aria-hidden="true"></span>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                  voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                  amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                </blockquote>
                <div class="testi-des">
                  <div class="test-img"><img src="assets/images/c2.jpg" class="img-fluid" alt="client-img">
                  </div>
                  <div class="peopl align-self">
                    <h3>Shveta</h3>
                    <p class="indentity">Example City</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <span class="fa fa-quote-left" aria-hidden="true"></span>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                  voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                  amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                </blockquote>
                <div class="testi-des">
                  <div class="test-img"><img src="assets/images/c3.jpg" class="img-fluid" alt="client-img">
                  </div>
                  <div class="peopl align-self">
                    <h3>Roy Linderson</h3>
                    <p class="indentity">Example City</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <span class="fa fa-quote-left" aria-hidden="true"></span>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                  voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                  amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                </blockquote>
                <div class="testi-des">
                  <div class="test-img"><img src="assets/images/c4.jpg" class="img-fluid" alt="client-img">
                  </div>
                  <div class="peopl align-self">
                    <h3>Mike Thyson</h3>
                    <p class="indentity">Example City</p>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <!-- /grids -->
  </div>
  <!-- //grids -->
</section>
<!-- //testimonials -->

<!--/w3l-footer-29-main-->
<?php
include_once "footer.php"
?>