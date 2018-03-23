
<!DOCTYPE html>
<html>
<body>



<?php

$dbh = new PDO('mysql:host=localhost;dbname=themovies', "root", "");

$iD=$_POST["userID"]; #iuser entered id
$iD= (string)$iD;
$pass=$_POST["password"]; #user entered password
$pass= (string) $pass;

echo $iD;
echo $pass;

try{
    $stmt = $dbh->query("select loginID from systemuser where loginID=$iD");
    $dbID = $stmt ->fetch();

    $stmt1 = $dbh ->query("select passwordHash from systemuser where loginID=$iD");
    $dbPW = $stmt1 ->fetch();

    $stmt2 = $dbh->query("select userType from systemuser where loginID=$iD");
    $dbTYPE = $stmt2 -> fetch();


    if ($iD==$dbID and $pass == $dbPW){

        if ($dbTYPE == 'c'){
            header('Location: /customerHome.php');
        }
        elseif($dbTYPE == 'a'){
            header('location: /adminHome.php' );
        }
    }
}
catch (PDOException $e){
    #header('location: /errorPage.php');
    print"Error!:".$e->getMessage()."<br/>";
}

$dbh = null;





?>



</body>
</html>
