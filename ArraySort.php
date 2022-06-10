<?php
	// The actual template for you code.

	//DO NOT MODIFY THIS FUNCTION

	function arraySortCheck( $arr ) {
		$arraysort = new ArraySort($arr);
		return $arraysort->arrsort();
	}

	class ArraySort {
		// Your code goes here

		public $array;

		function __construct($array)
		{

			$this->array = $array;
		}

		public function sort()
		{
			$my_array = $this->array;
			asort($my_array);
			return $my_array;
		}

		public function arrsort()
		{
			return $this->sort();
		}
	}
?>