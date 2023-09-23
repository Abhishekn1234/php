<?php

function rotateMatrix($matrix)
{
    $rows = count($matrix);
    $columns = count($matrix[0]);
    
    $rotatedMatrix = array();
    for ($i = 0; $i < $columns; $i++) {
        $rotatedMatrix[$i] = array();
        for ($j = 0; $j < $rows; $j++) {
            $rotatedMatrix[$i][$j] = $matrix[$j][$columns - $i - 1];
        }
    }
    
    return $rotatedMatrix;
}

$inputMatrix = array(
    array(1, 2, 3, 4, 5, 6),
    array(7, 8, 9, 10, 11, 12),
    array(13, 14, 15, 16, 17, 18),
    array(19, 20, 21, 22, 23, 24),
    array(25, 26, 27, 28, 29, 30),
    array(31, 32, 33, 34, 35, 36)
);

$rotatedMatrix = rotateMatrix($inputMatrix);

foreach ($rotatedMatrix as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "\n";
}
?>