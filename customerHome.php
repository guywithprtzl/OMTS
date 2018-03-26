<?php
/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 2018-03-26
 * Time: 2:38 PM
 */

$dbh = new PDO('mysql:host=localhost;dbname=themovies', "root", "");

$rows = $dbh->query("");


$dbh = null;