<?php
include_once "operators.php";
include_once "Database.php";
class trips extends Database implements operators{
    private $tripNo,$travel_start_date,$travel_end_date,$name,$nameAR,$price,$details,$detailsAR,$discount,$categoryNo;



    public function Add(){

    }
    public function Update(){

    }
    public function Delete(){

    }
    public function GetAll(){
        return parent::GetData("SELECT * FROM `trips`");
    }
    public function Getbytrip(){
        return parent::GetData("SELECT * FROM `trips` where categoryNo ='".$_GET["categoryNo"]."'");
    }
    public function Getbydetails(){
        return parent::GetData("SELECT * FROM `trips` where tripNo ='".$_GET["tripNo"]."'");
    }
    public function Getoffer(){
        return parent::GetData("SELECT * FROM `trips` where discount > 0");
    }
    public function GetBydepart($dno){
        return parent::GetData("SELECT * FROM `trips` where categoryNo = $dno");
    }

}