/*Create two functions: a left-shift function and a right-shift function. Each function will take in an array and a single parameter: the number of shifts.

[1, 2, 3, 4, 5]

[2, 3, 4, 5, 1]  // left shift of 1
[5, 1, 2, 3, 4]  // left shift of 4

[5, 1, 2, 3, 4]  // right shift of 1
[3, 4, 5, 1, 2]  // right shift of 3
Examples
leftShift([1, 2, 3, 4], 1) ➞ [2, 3, 4, 1]

rightShift([1, 2, 3, 4], 1) ➞ [4, 1, 2, 3]

leftShift([1, 2, 3, 4, 5], 3) ➞ [4, 5, 1, 2, 3]

leftShift([1, 2, 3, 4, 5], 5) ➞ [1, 2, 3, 4, 5]
// You have fully shifted the array, you end up back where you began.

leftShift([1, 2, 3, 4, 5], 6) ➞ [2, 3, 4, 5, 1]
// You should be able to take in numbers greater than the length.
// Think of the length of the array as a modulo.
Notes
$num might be higher than the number of values in the array.
$num will never be negative.*/


//Answer:
function leftShift($arr, $num) {
	$count = count($arr) ;
	for($i = 0; $i < $num; $i++) {
		array_push($arr, array_shift($arr)) ;
}
return $arr;
} 
function rightShift($arr, $num) {
	$count = count($arr) ;
	for($i = 0; $i<$num;$i++) {
		array_unshift($arr, array_pop($arr));
	} 
	return $arr;
}