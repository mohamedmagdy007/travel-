<?php
class Database{
var $conn;
function __construct()
{
    $this->conn=mysqli_connect("mysql5044.site4now.net","a6e673_travels","abc@123456","db_a6e673_travels");
}
//to Insert- Update -delete
function RunDML($statment)
{
    if(!mysqli_query($this->conn,$statment)){
        return mysqli_error($this->conn);
    }else{
        return "ok";
    }
}
function GetData($select){
    $result = mysqli_query($this->conn,$select);
    return $result;
}   
}
?>