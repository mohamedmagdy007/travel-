<?php
session_start();
if (isset($_SESSION["id"])) {
    include_once "headerAfter.php";
} else {
    include_once "headerBefore.php";
}
?>
<section style="margin-top: 165px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 ml-auto mr-auto">
                <h2 class="text-center mb-4">Forget Password</h2>
                <form method="post">
                    <input type="text" class="form-control mb-2" name="txtemail" placeholder="Email" required>
                    <input type="submit" class="form-control text-white btn-success mb-5 ml-auto mr-auto" value="Check Email" name="btnCheck" style="width: 50%; display:block;">
                    <?php
                    if (isset($_POST["btnCheck"])) {
                        include_once "classes/Users.php";
                        $user = new Users();
                        $user->setEmail($_POST["txtemail"]);
                        $rs = $user->GetByEmail();
                        if ($row = mysqli_fetch_assoc($rs)) {
                            $name = $row["name"];
                            $active = rand(11111, 99999);
                            $_SESSION["code"] = $active;
                            $msg = "Dear Mr/Miss " . $name . " <br> Your Activation is : " . $active . "<br> Click her to Check your activation code : http://localhost:3000/activation.php?name=" . urlencode($name) . "&id=" . $row['UserID'];
                            require_once "src/PHPMailer.php";
                            require_once "src/Exception.php";
                            require_once "src/SMTP.php";
                            require_once "vendor/autoload.php";

                            $mail = new  PHPMailer\PHPMailer\PHPMailer();

                            $mail->IsSMTP();
                            //$mail->SMTPDebug = 1;
                            $mail->SMTPAuth = true;
                            $mail->SMTPSecure = 'ssl';
                            $mail->Host = "smtp.gmail.com";
                            $mail->Port = 465; // or 587
                            $mail->IsHTML(true);

                            $mail->Username = "mohammed.mo7864@gmail.com";
                            $mail->Password = "abc@123456D";

                            $mail->setFrom('mohammed.mo7864@gmail.com', 'Traversal');

                            $mail->addAddress($row["email"], "Traversal");
                            $mail->Subject = 'Forget Password - Traversal';

                            $mail->Body = $msg;

                            if (!$mail->send()) {
                                //  echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";	
                                echo "Mailer Error: " . $mail->ErrorInfo;
                            } else {

                                echo ("<div class='alert alert-success'>Verfication Code has been sent , Check Your Email </div>");
                            }
                        } else {
                            echo "<div class='alert alert-danger'> Invaild Email try again </div>";
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