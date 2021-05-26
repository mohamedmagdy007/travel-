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
<div class="container " >
    <div class="row" style="margin-top: 100px; padding-bottom: 20px; padding-top:20px;">
                  <?php
                    include_once "classes/Users.php";
                    $user = new Users();
                    $rs = $user->GetAll();
                    if($row = mysqli_fetch_assoc($rs)){

                ?>
        <div class="col-12 col-md-6 col-lg-6" >
            <div class="portlet light profile-sidebar-portlet bordered">
                <div class="profile-userpic">
                    <img src="<?php if(file_exists("pictureProfile/".$_SESSION['id'].".jpg")){
                        echo "pictureProfile/".$_SESSION['id'].".jpg";
                    }else{echo "https://bootdey.com/img/Content/avatar/avatar6.png";}
                        
                      ?>" class="img-responsive img-fluid" alt="" style="border-radius: 50%;  width: 50%; height: 50%; margin-left: auto;margin-right: auto;">
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name text-center" style="font-size: 24px;font-weight: bold;"> <?php echo $row["name"];?> </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 align-self-center ">
            <form action="" method="post">
                
                <div class="form-group">
                    <label for="inputName">Email address :</label>
                    <?php echo $row["email"];?>    
                </div>
                <div class="form-group">
                    <label for="inputLastName">Phone :</label>
                    <?php echo $row["phone"];?>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password :</label>
                    <?php echo $row["password"];?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Birth Date :</label>
                    <?php echo $row["birthdate"];?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Country :</label>
                    <?php echo $row["country"];?>
                </div>
                <?php  } ?>


                <a href="editprofile.php" class="btn btn-outline-info" >Edit Profile</a>
                <input type="submit" name="btndelete" class="btn btn-danger" value="Delete"></input>
            <?php
            if(isset($_POST["btndelete"])){
                include_once "classes/Users.php";
                $use = new Users();
                $msg = $use->Delete();
                if($msg=="ok"){
                    unlink("pictureProfile/".$_SESSION['id'].".jpg");
                    echo "<script> window.open('logout.php','_self')</script>";
                }
            }
            ?>
            </form>
        </div>
    </div>
</div>

<?php

include_once "footer.php";
?>