<?php


function transpose(&$A, &$B)
{
	$N = 6;
	for ($i = 0; $i < $N; $i++)
		for ($j = 0; $j < $N; $j++)
			$B[$i][$j] = $A[$j][$i];
}



$A = array(array(1, 2, 3, 4,5,6),
		array( 7, 8 , 9, 10, 11,12),
		array(13, 14, 15, 16, 17, 18),
		array(19 , 20, 21, 22, 23, 24),
        array(25,26,27,28,29,30),
        array(31,32,33,34,35,36));

$N = 6;


transpose($A, $B);

echo "Result matrix is \n";
for ($i = 0; $i < $N; $i++)
{
	for ($j = 0; $j < $N; $j++)
	{
	echo $B[$i][$j];
	echo " ";
	}
	echo "\n";
}


?>
