<?php
define("DBhost","localhost");
define("DBuser","root");
define("DBpass","malimali");
define("DBname","projektiphp");

$connect=mysqli_connect(DBhost,DBuser,DBpass,DBname) or die("Cannot connect with database!");


?>