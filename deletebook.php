<?php
ob_start();
session_start();
include_once "classes/Database.php";
$db = new Database();
$msg=$db->RunDML("delete from booking where UserID='".$_SESSION["id"]."'and bookingNo='".$_GET["pno"]."'");
header("Location:bookingcart.php");
?>