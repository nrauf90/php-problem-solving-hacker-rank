<?php
/*
 * Complete the 'compareTriplets' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function compareTriplets($a, $b) {
    $alice = 0;
    $bob = 0;
    for($i=0; $i < count($a); $i++){
        if($a[$i] > $b[$i]){
            $alice++;
        }
        if($a[$i] < $b[$i]){
            $bob++;
        }
    }

    return [$alice, $bob];

}
$alice = [17, 28,30];
$bob = [99, 16, 8];
$result = compareTriplets($alice, $bob);
