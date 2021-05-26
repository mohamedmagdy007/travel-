<?php
session_start();
if (isset($_SESSION["id"])) {
    include_once "headerAfter.php";
} else {
    include_once "headerBefore.php";
}
if (!isset($_SESSION["id"])) {
    echo ("<script> window.open('index.php','_self')</script>");
}
?>
<div class="container ">
    <form action="" method="post" enctype="multipart/form-data">

        <?php
        if (isset($_POST['btnupdate'])) {
            include_once "classes/Users.php";
            $use = new Users();
            $use->setName($_POST["name"]);
            $use->setEmail($_POST["Email"]);
            $use->setPhone($_POST["Phone"]);
            $use->setPassword($_POST["txtpass"]);
            $use->setBirthDate($_POST["txtBdate"]);
            $use->setCountry($_POST["scountry"]);
            $reg = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";
            if(preg_match($reg,$_POST['txtpass'])){
                $msg = $use->Update();
                if($msg=="ok"){
                    $dir = "pictureProfile/";
                    $image = $_FILES['file']['name'];
                    $temp_name = $_FILES['file']['tmp_name'];

                    //$size = filesize($temp_name);
                    //echo($size);

                    $img = $_SESSION["id"];
                    if ($image != "") {
                        $fdir = $dir . $img . ".jpg";
                        move_uploaded_file($temp_name, $fdir);
                    }
                    echo "<div class='alert alert-success' style='margin-top: 100px;width:75%;margin-right: auto;margin-left: auto;'>User has been Updated succeeded </div>";
                }else if(strpos($msg,"users.email")){
                    echo "<div class='alert alert-danger' style='margin-top: 100px;width:75%;margin-right: auto;margin-left: auto;'>Email has been used before , Try another one </div>";
                }else if(strpos($msg,"users.phone")){
                    echo "<div class='alert alert-danger' style='margin-top: 100px;width:75%;margin-right: auto;margin-left: auto;'>Phone has been used before , Try another one </div>";
                }else{
                    echo $msg;
                }
            }else{
                echo "<div class='alert alert-danger' style='margin-top: 100px; width:75%;margin-right: auto;margin-left: auto;'>Password weak ! </div>";
            }
        }

        ?>
        <div class="row" style="margin-top: 100px; padding-bottom: 20px;">
            <?php
            include_once "classes/Users.php";
            $user = new Users();
            $rs = $user->GetAll();
            if ($row = mysqli_fetch_assoc($rs)) {

            ?>
                <div class="col-12 col-lg-4">
                    <div class="portlet light profile-sidebar-portlet bordered">
                        <div class="profile-userpic">
                            <img src="<?php if (file_exists("pictureProfile/" . $_SESSION['id'] . ".jpg")) {
                                            echo "pictureProfile/" . $_SESSION['id'] . ".jpg";
                                        } else
                                            echo "https://bootdey.com/img/Content/avatar/avatar6.png";

                                        ?>" class="img-responsive img-fluid" alt="" style="border-radius: 50%; margin-left: auto; width: 75%; height: 75%; margin-right: auto;">
                        </div>
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name text-center" style="font-size: 24px; color: #000;">
                                <input type="text" name="name" class="form-control mt-2 mb-4 mr-auto ml-auto" style="width: 75%;" placeholder="Name" value="<?php echo $row["name"]; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12  col-lg-8">


                    <div class="form-group">
                        <label for="recipient-email">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="Email" required value="<?php echo $row["email"];?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" name="Phone" required value="<?php echo $row["phone"];?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="txtpass" required value="<?php echo $row["password"];?>">
                    </div>
                    <div class="form-group">
                        <label for="txtBdate">Birth Date</label>
                        <input type="date" class="form-control" placeholder="Birth Date" name="txtBdate" required value="<?php echo $row["birthdate"];?>">
                    </div>
                    <div class="form-group">
                        <label for="inputGroupSelect01">Country </label>
                        <select name="scountry" class="custom-select">
                            <option value="Egypt" <?php if ($row["country"] == "Egypt") echo "selected"; ?>>Egypt</option>
                            <option value="SAU" <?php if ($row["country"] == "SAU") echo "selected"; ?>>SAU </option>
                            <option value="ARE" <?php if ($row["country"] == "ARE") echo "selected"; ?>>ARE</option>
                            <option value="RUS" <?php if ($row["country"] == "RUS") echo "selected"; ?>>RUS</option>
                            <option value="USA" <?php if ($row["country"] == "USA") echo "selected"; ?>>USA </option>
                        </select>
                    </div>

                    <div class="form-group p-1" style="border: 1px solid #ccc; border-radius: 4px;">
                        <label for="exampleInputFile" style="margin-bottom: 0px;">File input</label>
                        <input type="file" id="exampleInputFile" name="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                    </div>

                    <input type="submit" class="btn btn-outline-info" name="btnupdate" value="Update"></input>
                    <a href="myprofile.php" class="btn btn-danger">Cancel</a>

                </div>
        </div>
    <?php  } ?>
    </form>
</div>

<?php

include_once "footer.php";
?>