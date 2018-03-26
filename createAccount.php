
<!DOCTYPE html>
<html>
<body>

<?php

$dbh = mysqli_connect("localhost", "root", "","themovies");

$accNum = $pass = $iD = $stNum = $stName = $tN = $pC = $eM = $fName = $lName = $cCN = $cCED = $uT ="";

$stmt = mysqli_prepare($dbh,"insert into systemuser (loginID,passwordHash,userType) values(?,?,?)");
mysqli_stmt_bind_param($stmt,'sss',$id,$pass,$tP);


$iD=$_POST["loginID"];
$iD = "$iD";
$passC =$_POST["passwordConfirm"];
$passC = "$passC";
$pass=$_POST["passwordHash"];
$pass = "$pass";
$tP = "c";

if ($passC == $pass) {
    mysqli_stmt_execute($stmt);
}
else
    echo $pass;

$dbh = null;

#$stNum=$_POST["streetNum"];
#$stName=$_POST["streetName"];
#$tN=$_POST["town"];
#$pC=$_POST["postalCode"];
#$eM=$_POST["email"];
#$fName=$_POST["fname"];
#lName=$_POST["lname"];
#cCN=$_POST["creditCardNumber"];
#cCED=$_POST["creditCardExpiryDate"];
#$accNum=$_POST["accountNumber"];
?>



</body>
</html>
