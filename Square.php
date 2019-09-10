<?php
include_once "Shape.php";
include_once "Colorable.php";

class Square extends Shape implements Colorable
{
    public $width;

    public function __construct($name, $width)
    {
        parent::__construct($name);
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->width * $this->width;
    }

    public function howToColor()
    {
        return "Color all four sides";

    }
}