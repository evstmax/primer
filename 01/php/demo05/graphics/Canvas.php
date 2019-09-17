<?php

namespace demo05\graphics;

class Canvas {
    public function paint(Poin $point) {
        list($x, $y, $z) = $point->getPointCoordinates();
        echo "[x = $x; y = $y; z = $z]\n";
    }
}