<?php

$a[] = "Cristiano Ronaldo";
$a[] = "Lioel Messi";
$a[] = "David Beckham";
$a[] = "Diego Maradona";
$a[] = "Neymar";
$a[] = "Wayne Rooney";
$a[] = "Zlatan Ibrahimović";
$a[] = "Ronaldinho";
$a[] = "Andrés Iniesta";
$a[] = "Radamel Falcao";
$a[] = "Steven Gerrard";
$a[] = "Iker Casillas";
$a[] = "Gianluigi Buffon";
$a[] = "Edinson Cavani";
$a[] = "Paul Pogba";
$a[] = "Luka Modric";
$a[] = "Griezmann";
$a[] = "Mbappe";
$a[] = "Ronaldo";
$a[] = "Messi";
$a[] = "Maradona";
$a[] = "Rooney";
$a[] = "Ibrahimović";
$a[] = "Iniesta";
$a[] = "Falcao";
$a[] = "Gerrard";
$a[] = "Casillas";
$a[] = "Buffon";
$a[] = "Cavani";
$a[] = "Pogba";
$a[] = "Modric";

$q = $_REQUEST["q"];

$hint = "";


if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}


echo $hint === "" ? "no suggestion" : $hint;
?>