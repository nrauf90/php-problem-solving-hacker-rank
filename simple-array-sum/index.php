<?php
/*
 * Given an array of integers, find the sum of its elements.
 * For example, if the array ar = [1,2,3], 1 + 2 + 3 = 6, so return 6.
 * Function Description
 * Complete the simpleArraySum function in the editor below. It must return the sum of the array elements as an integer.
 * simpleArraySum has the following parameter(s):
 * ar: an array of integers
 * Input Format
 * The first line contains an integer, n, denoting the size of the array.
 * The second line contains n space-separated integers representing the array's elements.
 * Constraints
 * Output Format
 * Print the sum of the array's elements as a single integer.
 */

/**
 * @param $array
 * @return float|int
 */
function simpleArraySum($array) {
    return array_sum($array);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$ar_count = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = simpleArraySum($ar);

fwrite($fptr, $result . "\n");

fclose($fptr);
