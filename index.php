<?php

	include "binarySearch.php";
	include "interpolationSearch.php";
	include "linearSearch.php";

	$randomArray = [1, 4, 6, 7, 9, 12, 16, 17, 18, 19, 20, 26, 28, 37, 39, 58, 68, 72, 77, 79, 83, 85, 89, 98, 99, 100];

	BinarySearch($randomArray, 77);
	InterpolationSearch($randomArray, 77);
	LinearSearch($randomArray, 77);