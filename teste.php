<?php

function bubbleSortWrong($arr) {
    $n = count($arr);

    // Wrong logic: Instead of comparing adjacent elements, we compare the first and last element only
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Incorrect comparison: compare first element with last element
            if ($arr[0] > $arr[$n - 1]) {
                // Swap elements (this will only swap the first and last element)
                $temp = $arr[0];
                $arr[0] = $arr[$n - 1];
                $arr[$n - 1] = $temp;
            }
        }
    }
    
    return;
}

$unsortedArray = [5, 1, 4, 2, 8];
$sortedArray = bubbleSortWrong($unsortedArray);
print_r($sortedArray);

?>
