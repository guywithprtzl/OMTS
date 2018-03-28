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
    $insert = mysqli_query($con,"insert into systemuser (loginID, passwordHash, userType) VALUES ('admin','password','a')");
    $query = mysqli_query($con, 'select * from systemuser');
    if($query == NULL){
        echo "NULL Query";
    }
    while($row = mysqli_fetch_array($query)) {
        echo "<h1>++++</h1>";
        echo $row["loginID"];
        echo $row["passwordHash"];
    }
}
?>



