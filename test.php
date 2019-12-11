<?php
$x = 75;
$y = 25;
$array = [0,1,2];

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z . "<br/>";
var_dump($GLOBALS['array']);
?>
