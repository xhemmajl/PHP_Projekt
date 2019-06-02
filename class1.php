<?php

class Ne {

    public $x,$y;
    
    public function __construct ($emri,$viti) {
        $this->x = $emri;
        $this->y = $viti;
        echo " ".__CLASS__." jemi me te miret.";
    }

    public function printOut () {
        echo ' '.$this->x
            .'  '.$this->y;
    }

}

$mob = new Ne('Sporti','2019');

$mob->printOut();

?>