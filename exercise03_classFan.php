<?php

class Fan
{
    const slow = 1;
    const medium = 2;
    const fast = 3;
    private $speed = self::slow;
    private $on = false;
    private $radius = 5;
    private $color = "blue";

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getStatus()
    {
        return $this->on;
    }

    public function getRadius()
    {
        return $this->color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function setStatus($bool)
    {
        $this->on = $bool;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function toString()
    {
        if ($this->on === true) {
            return "Fan {Speed: " . $this->speed . " Color: " . $this->color . " Radius: " . $this->radius . "} is on";
        } else if ($this->on === false) {
            return "Fan {Speed: " . $this->speed . "Color: " . $this->color . "Radius: " . $this->radius . "} is off";
        }
    }
}

$fan1 = new Fan();
$fan1->setSpeed(Fan::fast);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setStatus(true);
echo($fan1->toString() . "<br>");

$fan2 = new Fan();
$fan2->setSpeed(Fan::fast);
$fan2->setRadius(15);
$fan2->setColor("blue");
echo($fan2->toString());


?>
