<?php

class Bicycle{
    public $manufacturer;
    public $model;
    public $year;

    public function __construct($manufacturer, $model, $year){
        
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->year = $year;
        
    }
}

$bmw = new Bicycle("Kalkhoff", "Image 3.B Move Wabe", 2022);
echo "<pre>";
print_r($bmw);
echo "</pre>";


?>