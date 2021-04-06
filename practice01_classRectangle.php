<?php
class Rectangle {
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
     // Tính diện tích
    public  function getArea()
    {
        return $this->width * $this->height;
    }
    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }
    public function display()
    {
        return "Rectangle{" . "width = " . $this->width . "height = " . $this->height;
    }
}
$width = 20;
$height = 15;
$rectangle = new Rectangle($width, $height);

echo $rectangle->width . "</br>";
echo $rectangle->height . "</br>";

$rectangle->width = 30;
$rectangle->height = 20;
echo $rectangle->width . "</br>";
echo $rectangle->height . "</br>";
echo $rectangle->getArea() . "</br>";
echo $rectangle->getPerimeter() . "</br>";


?>