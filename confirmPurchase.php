<?php
/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 2018-03-27
 * Time: 7:28 PM
 */


$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$stmt = mysqli_prepare($dbh,"insert into customer (accountNumber,loginID,streetNum,streetName,town,postalCode,
                      email,fName,lName,creditCardNumber,creditCardExpiryDate) 
                      values(?,?,?,?,?,?,?,?,?,?,?)");
mysqli_stmt_bind_param($stmt,'sss',$accNum,$id,$stNum,$stName,$tN,$pC,$eM,$fName,$lName,$cCN,$cCED);

$id=$_POST["loginID"];
$stNum=$_POST["streetNum"];
$stName=$_POST["streetName"];
$tN=$_POST["town"];
$pC=$_POST["postalCode"];
$eM=$_POST["email"];
$fName=$_POST["fname"];
$lName=$_POST["lname"];
$cCN=$_POST["creditCardNumber"];
$cCED=$_POST["creditCardExpiryDate"];
$accNum=$_POST["accountNumber"];




?>