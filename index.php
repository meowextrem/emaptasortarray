<?php
	include('ArraySort.php');

	$arraysort = new ArraySort( array(1, 3, 5, 8, 7, 4, 2) );
	echo "<br>";
	print_r($arraysort);
	echo "<br>"; 
	print_r($arraysort->sort());
	echo "<br>";

	$arraysort = new ArraySort(array(1, 5, -4, 0, 7, 1, 2));
	echo "<br>";
	print_r($arraysort);
	echo "<br>"; 
	print_r($arraysort->sort());
	echo "<br>";

	$arraysort = new ArraySort(array());
	echo "<br>";
	print_r($arraysort);
	echo "<br>"; 
	print_r($arraysort->sort());
	echo "<br>";
?>