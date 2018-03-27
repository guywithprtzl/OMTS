<?php
/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 2018-03-26
 * Time: 2:38 PM
 */

$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($dbh,"select title, runningTime, rating, synopsis from movie");
if($query == NULL){
    echo "NULL Query";
}
while($row = mysqli_fetch_array($query)) {;}


$dbh = null;