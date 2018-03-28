
<!DOCTYPE html>
<html>
<body>

<?php

$dbh = mysqli_connect("localhost", "root", "","themovies");

$iD=$_POST["loginID"];
$passC =$_POST["passwordConfirm"];
$pass=$_POST["passwordHash"];
$tP = "c";

if ($passC == $pass) {
    if(mysqli_query($dbh,"insert into systemuser (loginID,passwordHash,userType) values('$iD','$passC','$tP')")){
        echo "<a href=\"homePageHTML.html\">Account creation succesful. Click here to return to login page</a>";
    }
    else{
        echo "<a href=\"createAccountHMTL.html\">Account creation FAILED. Click here to return to account creation page</a>";
    }
}

$dbh = null;

?>

</body>
</html>
