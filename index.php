<?php
$numbers = [-3, -8, 5, 3, 9, -5, 21, -32, 6];
function plus($n){
    return ($n > 0);
}
function multiply($n1, $n2){
    return $n1*$n2;
}
print_r(array_filter($numbers, "plus"));
print_r(array_reduce(array_filter($numbers, "plus"), "multiply", 1));