<?php


class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;
    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        return $this->speed;
    }
    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function toString()
    {
        return parent::toString() . '<br>' . ' xSpeed : ' . $this->xSpeed . '<br>' . ' ySPeed : ' . $this->ySpeed; // TODO: Change the autogenerated stub
    }
    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this->xSpeed . '<br>' . $this->ySpeed;
    }
}