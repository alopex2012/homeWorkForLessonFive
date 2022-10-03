<?php

class Rectangle
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getSquare()
    {
        return  $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    public function Info()
    {
        echo "Ширина прямокутника: {$this->width} <br />";
        echo "Висота прямокутника: {$this->height} <br />";
    }
}
