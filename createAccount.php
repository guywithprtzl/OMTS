
<!DOCTYPE html>
<html>
<body>

<?php

$dbh = mysqli_connect("localhost", "root", "","themovies");

$accNum = $pass = $iD = $stNum = $stName = $tN = $pC = $eM = $fName = $lName = $cCN = $cCED = $uT ="";


$iD=$_POST["loginID"];

$passC =$_POST["passwordConfirm"];

$pass=$_POST["passwordHash"];
#$stmt = mysqli_query($dbh,"insert into systemuser (loginID,passwordHash,userType) values(?,?,?)");
#mysqli_stmt_bind_param($stmt,'sss','$id','$pass','$tP');




$tP = "c";

echo $iD;
echo $passC;
echo $pass;
echo $tP;

if ($passC == $pass) {
    if(mysqli_query($dbh,"insert into systemuser (loginID,passwordHash,userType) values('$iD','$passC','$tP')")){
        echo "<h1>it worked</h1>";
    }
    echo "<a href=\"homePageHTML.html\">Click here to return to the login page</a>";
    echo"";
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
