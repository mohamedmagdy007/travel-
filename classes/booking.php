<?php
include_once "operators.php";
include_once "Database.php";
class booking extends Database implements operators{

   private $bookingNo,$name,$days,$nights, $total ,$price,$details,$numberOfSeats,$numberChildent,$userID,$tripNo;
   public function getbookingNo()
   {
       return $this->bookingNo;
   }
   public function setbookingNo($value)
   {
       $this->bookingNo= $value;
   }

   public function getname()
   {
       return $this->name;
   }
   public function setname($value)
   {
       $this->name = $value;
   }
   public function getdays()
   {
       return $this->days;
   }
   public function setdays($value)
   {
       $this->days = $value;
   }

   public function getnights()
   {
       return $this->nights;
   }
   public function setnights($value)
   {
       $this->nights = $value;
   }


   public function gettotal()
   {
       return $this->total;
   }
   public function settotal($value)
   {
       $this->total = $value;
   }
   public function getnumberOfSeats()
   {
       return $this->numberOfSeats;
   }
   public function setnumberOfSeats($value)
   {
       $this->numberOfSeats = $value;
   }
   public function getnumberChildent()
   {
       return $this->numberChildent;
   }
   public function setnumberChildent($value)
   {
       $this->numberChildent = $value;
   }
   public function getuserID()
   {
       return $this->userID;
   }
   public function setuserID($value)
   {
       $this->userID = $value;
   }
   public function gettripNo()
   {
       return $this->tripNo;
   }
   public function settripNo($value)
   {
       $this->tripNo = $value;
   }
   public function getprice()
   {
       return $this->price;
   }
   public function setprice($value)
   {
       $this->price = $value;
   }
   public function getdetails()
   {
       return $this->details;
   }
   public function setdetails($value)
   {
       $this->details = $value;
   }
    public function Add(){
        return parent::RunDML("insert into booking values(Default,'".$this->getname()."','".$this->getdays()."','".$this->getnights()."','".$this->getnumberOfSeats()."','".$this->getnumberChildent()."','".$this->getprice()."','".$this->gettotal()."','".$this->getdetails()."','".$_SESSION["id"]."','".$this->gettripNo()."')");
    }
    public function Update(){

    }
    public function Delete(){

    }

    public function GetAll(){
        
    }



}