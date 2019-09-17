<?php

use demo05\graphics\Canvas;
use demo05\points\Poin;

include_once __DIR__ . '/graphics/Poin.php';
include_once __DIR__ . '/graphics/Canvas.php';
include_once __DIR__ . '/points/Poin.php';

$canvas = new Canvas();
$point = new Poin(5, 3, 7);

$canvas->paint($point);

echo get_class($canvas) . PHP_EOL;
echo get_class($point) . PHP_EOL;
 