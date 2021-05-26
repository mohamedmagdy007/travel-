<?php
session_start();
if (isset($_SESSION["id"])) {
    include_once "headerAfter.php";
} else {
    include_once "headerBefore.php";
}
if (!isset($_GET["id"])) {
    echo ("<script> window.open('index.php','_self')</script>");
}
?>
<section style="margin-top: 165px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 ml-auto mr-auto">
                <h2 class="text-center mb-4">Activation Code - Forget Password</h2>
                <form method="post">
                    <input type="text" class="form-control mb-2" value="<?php if(isset($_GET['id']))echo $_GET['name'];  ?>" name="txtpass" readonly required>
                    <input type="password" class="form-control mb-2" name="txtpass" placeholder="New Password" required>
                    <input type="password" class="form-control mb-2" name="txtconfpass" placeholder="Confirm Password" required>
                    <input type="submit" class="form-control text-white btn-success mb-5 ml-auto mr-auto" value="Activation Code" name="btnupdate" style="width: 50%; display:block;">

                    <?php

                    if (isset($_POST["btnupdate"])) {
                            if ($_POST["txtpass"] == $_POST["txtconfpass"]) {
                                include_once "classes/Users.php";
                                $user = new Users();
                                 $reg = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";
                                $user->setPassword($_POST["txtpass"]);
                                if(preg_match($reg,$_POST["txtpass"])){
                                    $user->Updatepw();
                                    echo "<div class='alert alert-success' style='margin-top: 100px;width:75%;margin-right: auto;margin-left: auto;'>Password has been updated <a href='index.php' style='text-decoration: none; color:#FF1654'>Home</a> </div>";
                                }else{
                                    echo "<div class='alert alert-danger' style='margin-top: 100px; width:75%;margin-right: auto;margin-left: auto;'>Password weak ! </div>"; 
                                }
                        
                                
                            
                               } else {
                                    echo "<div class='alert alert-danger' style='margin-top: 100px; width:75%;margin-right: auto;margin-left: auto;'>Password is not match </div>";
                                }
                            
                            
                        } 
                
                    ?>

                </form>
            </div>

        </div>
    </div>
</section>


<?php
include_once "footer.php"
?>