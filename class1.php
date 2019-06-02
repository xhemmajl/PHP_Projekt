<?php

class Ne {

    public $deviceName,$deviceVersion;
    
    public function __construct ($name,$version) {
        $this->deviceName = $name;
        $this->deviceVersion = $version;
        echo " ".__CLASS__." jemi me te miret.";
    }

    public function printOut () {
        echo ' '.$this->deviceName
            .'  '.$this->deviceVersion;
    }

}

$mob = new Ne('Sporti','2019');

$mob->printOut();

?>