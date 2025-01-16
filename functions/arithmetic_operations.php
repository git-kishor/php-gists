<?php

/**
 * This function handles the basic arithmetic operations with two numbers
 * 1. Addition | 2. Subtraction | 3. Multiplication | 4. Division
 * @param {int} $op : This is selected operation number
 * @param {float} $x : This is first number
 * @param {float} $y : This is second number
 * @return {string}
 */
function arithmetic_operations(int $op, float $x, float $y) : string {

	switch($op) {
		case 1 :
			/**
			* This is addition operation
			*/
			$xy = $x + $y;
			echo "Addition of two numbers {$x} + {$y} = {$xy}" . PHP_EOL;
			break;

		case 2 :
			/**
			* This is subtraction operation
			*/
			$xy = $x - $y;
			echo "Subtraction of two numbers {$x} - {$y} = {$xy}" . PHP_EOL ;
			break;

		case 3 :
			/**
			* This is multiplication operation
			*/
			$xy = $x * $y;
			echo "Multiplication of two numbers {$x} * {$y} = {$xy}" . PHP_EOL;
			break;

		case 4 :
			/**
			* This is division operation
			*/
			if ($y == 0) {
				echo "Divisor must not be zero, please re-run the process" . PHP_EOL;
			}
			else {
				$xy = $x / $y;
				echo "Division of two numbers {$x} / {$y} = {$xy}" . PHP_EOL;
			}
			break;
  
		default:
			echo "Something went wrong..." . PHP_EOL;
	}

 	return "";
}

/**
 * This recursive function validates the operation number
 * @return {int} $op: The operation number
 */
function select_opertion() {
	$op = (int) readline("Enter a number for the operation: ");

	if (!in_array($op, [1, 2, 3, 4])) {
		echo("Re-select a valid operation"). PHP_EOL;
		$op = select_opertion();
	}
	return $op;
}

$flow = true;

do {

	$x = (float) readline("Enter first number: ");
	$y = (float) readline("Enter second number: ");
	echo("1. Addition | 2. Subtraction | 3. Multiplication | 4. Division") . PHP_EOL;
	$op = select_opertion();
	arithmetic_operations($op, $x, $y);

	$con = readline("Do you want to continue: ");
	if ($con == "n") $flow = false;

} while ($flow);