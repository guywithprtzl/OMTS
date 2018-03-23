
<!DOCTYPE html>
<html>
<body>




<?php

$dbh = new PDO('mysql:host=localhost;dbname=themovies', "root", "");

$accNum = $pass = $iD = $stNum = $stName = $tN = $pC = $eM = $fName = $lName = $cCN = $cCED = "";
  #  $iD = trim($_POST["loginID"]);
  #  $pass = trim($_POST["passwordHash"]);
  #

$accNum=$_POST["accountNumber"];
$pass=$_POST["passwordHash"];
$pass=(string)$pass;
$iD=$_POST["loginID"];
$iD=(string)$iD;
$stNum=$_POST["streetNum"];
$stName=$_POST["streetName"];
$tN=$_POST["town"];
$pC=$_POST["postalCode"];
$eM=$_POST["email"];
$fName=$_POST["fname"];
$lName=$_POST["lname"];
$cCN=$_POST["creditCardNumber"];
$cCED=$_POST["creditCardExpiryDate"];

try {
    $stmt = $dbh->query("insert into systemuser values ($iD,$pass,'c')");
    $stmt = $dbh->query("insert into customer values ($accNum,$iD,$stNum,$stName,$tN,$pC,$eM,$fName,$lName,$cCN,$cCED)");
    $rows = $dbh->query("select loginID from systemuser");
    foreach($rows as $row){
        echo  $row[0]."<br>";
    }

}
catch(PDOException $e){
    print"Error!:".$e->getMessage()."<br/>";
}
$dbh = null;
?>



</body>
</html>
