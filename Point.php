<?php


class Point
{
    public $x;
    public $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getY()
    {
        return $this->y;
    }
    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getXY()
    {
        return $this->x . '_' . $this->y;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function toString()
    {
        return ' x: ' . $this->x . '<br>' . ' y: ' . $this->y;
    }
}