<?php
ob_start();
session_start();
if (isset($_SESSION["id"])) {
    include_once "headerAfter.php";
} else {
    include_once "headerBefore.php";
}
if(!isset($_GET["id"])){
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
                    <input type="text" class="form-control mb-2" name="txtcode" placeholder="Activation Code" required>
                    <input type="submit" class="form-control text-white btn-success mb-5 ml-auto mr-auto" value="Activation Code" name="btncode" style="width: 50%; display:block;">
               <?php 
               if(isset($_POST["btncode"])){
                    if($_SESSION["code"]== $_POST['txtcode']){
                        $name=$_GET["name"];
                        $id=$_GET['id'];
                        header("Location:updatepassword.php?name=".urlencode($name)."&id={$id}");
                       
                    }else{
                        echo "<div class='alert alert-danger'> Error in activation code, check you email !! </div>"; 
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