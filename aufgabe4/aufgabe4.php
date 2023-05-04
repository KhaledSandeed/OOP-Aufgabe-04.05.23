<?php
class Shape{
    public function getArea() : float{
        return 0;
    }
}

class Rectangle extends shape{
    public float $width;
    public float $height;

    public function __construct(float $width, float $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() : float {
        return $this->width * $this->height;
    }   
}

class Circle extends Shape{
    public float $radius;
    
    public function __construct(float $radius){
        $this->radius = $radius;
    }

    public function getArea() : float{
        return pi() * ($this->radius ** 2);
    }

}



$rechteck = new Rectangle(10,5);
$kreis = new Circle(4);


echo "Fläche des Rechtecks: " . $rechteck->getArea() . "<br>";
echo "Fläche des Kreises: " . $kreis->getArea() . "<br>";