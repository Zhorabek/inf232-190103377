/*Create a function that takes in an array of numbers and returns the sum of its cubes.

Examples
sumOfCubes([1, 5, 9]) ➞ 855
// Since 1^3 + 5^3 + 9^3 = 1 + 125 + 729 = 855

sumOfCubes([3, 4, 5]) ➞ 216

sumOfCubes([2]) ➞ 8

sumOfCubes([]) ➞ 0*/

Answer: 
function sumOfCubes($nums) {
  $sumofcubes =0;
  for($i=0; $i<count($nums) ; $i++) {
    $sumofcubes =$sumofcubes + Pow($nums[$i], 3);
  } 
   return $sumofcubes;
}