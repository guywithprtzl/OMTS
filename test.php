<?php

$user="user";
$password="user";
$con=mysqli_connect("localhost","root","","themovies");
if(!$con)
{
echo "could not connect" ;
}
else
{
echo "connected";
    echo "<h1>++++</h1>";
    $loginID = "Brayden";
    $passwordHash = "kjkjkjkjkjfdfdfdfdfdklklklklkg61";
    $query = mysqli_query($con,"insert into systemuser (loginID,passwordHash,userType)");
    if($query == NULL){
        echo "NULL Query";
    }
    while($row = mysqli_fetch_array($query)) {
        echo "<h1>++++</h1>";
        echo $row["loginID"];
        echo $row["accountNumber"];
    }
}
?>



