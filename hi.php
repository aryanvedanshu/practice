<?php
function add_numbers(&$num, $num1 = 10, $num2 = 10)
{
    if ($num1) {
        $num = $num + $num1;
    }
    if ($num2) {
        $num = $num + $num2;
    }
}
$x = 20;
add_numbers($x, 5);
echo $x;
