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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style-starter.css">

    <!-- Template CSS -->
    <style>
        .checked {
            color: orange;
        }
    </style>
</head>

<?php
session_start();
if (isset($_SESSION["id"])) {
    include_once "headerAfter.php";
} else {
    include_once "headerBefore.php";
}

?>





<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
        <div class="container">
            <h2 class="title">Delails</h2>
            <ul class="breadcrumbs-custom-path mt-2">
                <li><a href="index.php">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Delails </li>
            </ul>
        </div>
    </div>
</section>


<section id="details" class="mt-5 mb-5">
    <div class="container">

        <div class="row">
            <?php


            include_once "classes/trips.php";
            $travel = new trips();
            $rs2 = $travel->Getbydetails();
            while ($row1 = mysqli_fetch_assoc($rs2)) {

            ?>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <img src="travels/<?php echo $row1["tripNo"] ?>a.jpg" alt="" class="img-responsive img-fluid">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 col-md-6 col-lg-6">
                            <img src="travels/<?php echo $row1["tripNo"] ?>a.jpg" alt="" class="img-responsive img-fluid">
                        </div>

                        <div class="col-6 col-md-6 col-lg-6">
                            <img src="travels/<?php echo $row1["tripNo"] ?>a.jpg" alt="" class="img-responsive img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6 mt-2 mt-md-0">
                    <div class="text-center mb-3 alert alert-warning">
                        <?php
                        for ($x = $row1["rating"]; $x >= 1; $x--) {
                        ?>
                            <span class="fa fa-star checked"></span>
                        <?php } ?>
                        <?php
                        for ($x = $row1["rating"]; $x < 5; $x++) {
                        ?>
                            <span class="fa fa-star"></span>
                        <?php } ?>
                    </div>
                    <div class="alert alert-success" role="alert">
                        Location
                    </div>
                    <p class="card-title ml-2"><i class="fas fa-map-marker-alt"></i> <?php echo $row1["name"] ?></p>
                    <div class="alert alert-success" role="alert">
                        Delails
                    </div>
                    <h5 class="card-text mb-1 ml-2"><?php echo $row1["details"] ?></h5>
                    <p class="card-text mb-2 ml-2"><?php echo $row1["detailsAR"] ?></p>
                    <div class="alert alert-success" role="alert">
                        Date
                    </div>
                    <div class="row justify-content-around">
                        <p><i class="far fa-clock"></i> <span class="font-weight-bold">Trip start date : </span> <?php echo $row1["travel_start_date"] ?> </p>
                        <p><i class="far fa-clock"></i> <span class="font-weight-bold">Trip End date : </span> <?php echo $row1["travel_end_date"] ?> </p>
                    </div>
                    <div class="row justify-content-around">
                        <p><i class="far fa-clock"></i> <?php echo $row1["days"] ?> <span class="font-weight-bold">Days </span> </p>
                        <p class="mb-2"><i class="far fa-clock"></i> <?php echo $row1["nights"] ?> <span class="font-weight-bold">Nights </span> </p>
                    </div>
                    <div class="alert alert-success" role="alert">
                        Prices
                    </div>
                    <div class=" row">
                    <div class="col-12 col-md-6">
                        <div class="row justify-content-around">
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
                            </i> <small> from</small> <span style="color:#d8207a ; font-weight: 900;"> $ <?php echo $row1["price"] - ($row1["price"] * $row1["discount"]) ?> </span>
                        </p>
                        <?Php if ($row1["offer"] == 1) { ?>
                            <p><span style="color:#d8207a ; font-weight: 400;"> <del>$ <?php echo $row1["price"] ?></del> </span></p>
                        <?php } ?>
                        </div>
                    <form method="post">
                         
                        
                        <input type="number"  class="form-control text-center mb-2 mt-3 mr-auto ml-auto" placeholder="The number of individuals" value="<?php echo (isset($_POST["seatsnumber"]) ? $_POST["seatsnumber"] : ''); ?>" name="seatsnumber" required min="1">
                        <input type="number"  class="form-control text-center mb-2 mr-auto ml-auto" placeholder="Number of Children"    value="<?php echo (isset($_POST["numberchilden"]) ? $_POST["numberchilden"] : ''); ?>" name="numberchilden" required min="0">
                        </div>
                        <div class="col-12 col-md-6 align-self-center">
                        <input type="submit" style="width: 70%;display:block; margin-left:auto;margin-right:auto ;margin-top:25px; margin-bottom:5px; " class="btn btn-success" name="calc" value="resr">
                        <?php
                        if (isset($_SESSION["id"])) {
                            echo '<button style="width: 70%;display:block;margin:auto;" type="submit" name="btnbooking' . $row1["tripNo"] . '" class="btn btn-secondary ">Booking</button>';
                        } else {
                            echo '<button style="width: 70%; display:block;margin:auto;" type="button" id="book" class="btn btn-secondary " data-toggle="modal" aria-pressed="false" data-target="#exampleModal">Booking</button>';
                        }
                        ?>
                        
                         </div>
                        </div>  
                        <div class="row">
                        <?php
                        if (isset($_POST["calc"])) {
                            $seatsnum = 0;
                            $numchilden = 0;
                            $price = 0;
                            $seatsnum = $_POST["seatsnumber"];
                            $numchilden = $_POST["numberchilden"];
                            $price = $row1["price"] ;
                            $totalafter=$row1["price"] - ($row1["price"] * $row1["discount"]);
                            if($row1["offer"] == 1  ){
                                $total = $totalafter * ($seatsnum + ($numchilden * .5));
                            }else{
                                $total = $price * ($seatsnum + ($numchilden * .5));
                            }
    
                            if ($total <= 0) {

                                echo "<div style='width:250px;' class='alert-danger mr-auto ml-auto'>  The numbers must be positive </div>";
                            } else {

                                echo "<div style='width:250px;' class='alert alert-success text-center mr-auto ml-auto'>$ $total </div>";
                            }
                        }
                        ?>
                        <?php
                        if (isset($_POST["btnbooking" . $row1["tripNo"]])) {
                            include_once "classes/booking.php";
                            $res = new booking();
                            $res->setnumberOfSeats($_POST["seatsnumber"]);
                            $res->setnumberChildent($_POST["numberchilden"]);
                            
                            $res->setname($row1["name"]);
                            $res->setdetails($row1["details"]);
                            $res->setdays($row1["days"]);
                            $res->setnights($row1["nights"]);
                            $price = $row1["price"] ;
                            
                            $totalafter=$row1["price"] - ($row1["price"] * $row1["discount"]);
                            $res->setprice($totalafter);
                            if($row1["offer"] == 1  ){
                                $total = $totalafter * ($_POST["seatsnumber"] + ($_POST["numberchilden"] * .5));
                            }else{
                                $total = $price * ($_POST["seatsnumber"]+ ($_POST["numberchilden"] * .5));
                            }
                            $res->settotal($total);
                            $res->settripNo($row1["tripNo"]);
                            $rs = $res->Add();
                            if ($rs == "ok") {
                                echo "<div class='alert alert-success mr-auto ml-auto text-center'>booking</div>";
                            } else {
                                echo $rs;
                            }

                            echo "<meta http-equiv='refresh' content='0'>";

                            }?>                           
                        </div>
                        
                    </form>
                <?php } ?>
                </div>
        </div>
</section>

















<?php
include_once "footer.php"
?>