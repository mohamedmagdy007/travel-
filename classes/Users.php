<?php

include_once "operators.php";
include_once "Database.php";
class Users extends Database implements operators
{
    private $userId, $name, $email, $country, $password, $birthDate, $phone;

    public function getUserId()
    {
        return $this->userId;
    }
    public function setUserId($value)
    {
        $this->userId = $value;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($value)
    {
        $this->name = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getCountry()
    {
        return $this->country;
    }
    public function setCountry($value)
    {
        $this->country = $value;
    }


    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($value)
    {
        $this->password = $value;
    }


    public function getBirthDate()
    {
        return $this->birthDate;
    }
    public function setBirthDate($value)
    {
        $this->birthDate = $value;
    }


    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($value)
    {
        $this->phone = $value;
    }


    public function login(){
        return parent::GetData("select*from users where(email='".$this->getEmail()."' or phone ='".$this->getphone()."') and password ='".$this->getPassword()."'");
    }
    public function Add()
    {
        return parent::RunDML("insert into users values(Default, '".$this->getEmail()."','".$this->getCountry()."','".$this->getName()."','".$this->getPassword()."','".$this->getBirthDate()."','".$this->getPhone()."')");
    }
    public function Update()
    {
        return parent::RunDML("update users set email='".$this->getEmail()."',country='".$this->getCountry()."',name='".$this->getName()."',password='".$this->getPassword()."',birthdate='".$this->getBirthDate()."',phone='".$this->getPhone()."'where UserID='".$_SESSION["id"]."'");
    }
    public function Updatepw()
    {
        return parent::RunDML("update users set password='".$this->getPassword()."'where UserID='".$_GET["id"]."'");
    }
    public function Delete()
    {
        return parent::RunDML("delete from users where UserID='".$_SESSION["id"]."'");
    }
    public function GetAll()
    {
        return parent::GetData("select * from users where UserID='".$_SESSION["id"]."'");
    }
    public function GetByEmail(){
        return parent::GetData("select * from users where email='".$this->getEmail()."'or phone='".$this->getPhone()."'");
    }
}
