<?php

namespace demo05\points;

use demo05\graphics\Poin as BasePoint;

class Poin implements BasePoint
{
    public $x;
    public $y;
    public $z;

    public function __construct($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getPointCoordinates() {
        return [$this->x, $this->y, $this->z];
    }
}