
<!DOCTYPE html>
<html>
<body>



<?php

$dbh = new PDO('mysql:host=localhost;dbname=themovies', "root", "");

$iD=$_POST["userID"];
$pass=$_POST["password"];

echo $iD;
echo $pass;

$rows = $dbh->query("select title from movie");

foreach($rows as $row){
    echo  $row[0]."<br>";
}
$dbh = null;





?>



</body>
</html>
