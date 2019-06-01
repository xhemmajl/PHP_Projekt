
            <?php 
class Name { 
    public $title = 'Unitedi fiton lehtësisht ndaj Fulhamit, gati për derbin ndaj Liverpoolit '; 
} 

$name = new Name; 
?> 
<?php 
function getVarName() 
{ return 'title'; } 

print $name->{getVarName()};
