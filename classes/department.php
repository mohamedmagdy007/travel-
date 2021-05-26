<?php
include_once "operators.php";
include_once "Database.php";
class department extends Database implements operators{
    private $departId,$name,$nameAR; 


    public function getDepartId()
    {
        return $this->departId;
    }
    public function setDepartId($value)
    {
        $this->departId = $value;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($value)
    {
        $this->name = $value;
    }

    public function getNameAR()
    {
        return $this->nameAR;
    }
    public function setNameAR($value)
    {
        $this->nameAR = $value;
    }

    public function Add(){

    }
    public function Update(){

    }
    public function Delete(){

    }
    public function GetAll(){
        return parent::GetData("SELECT * FROM `category`");
    }

}
