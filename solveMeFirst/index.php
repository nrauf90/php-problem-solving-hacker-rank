<?php
/*
 * Problem: Complete the function solveMeFirst to compute the sum of two integers.
 * Function Description: Complete the solveMeFirst function in the editor below.
 * solveMeFirst has the following parameters:
 * int a: the first value
 * int b: the second value
 * Return: int: the sum of a and b
 *
 */

/**
 * This function take two integers as input and return sum of these numbers
 * @param $a
 * @param $b
 * @return mixed
 */
function solveMeFirst($a, $b)
{
    return $a + $b;
}


$_a = 10;
$_b = 20;

$sum = solveMeFirst($_a, $_b);
echo $sum;
