<?php
	include('ArraySort.php');

	$arraysort = new ArraySort( array(1, 3, 5, 8, 7, 4, 2) );
	echo "<br>";
	echo "Original Array: ";var_dump ($arraysort->array);
	echo "<br> Sorted Array: "; 
	var_dump($arraysort->sort());
	echo "<br>";
?>