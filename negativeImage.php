/*Suppose an image can be represented as a 2D array of 0s and 1s. Write a function to reverse an image. Replace the 0s with 1s and vice versa.

Examples
reverseImage([
  [1, 0, 0],
  [0, 1, 0],
  [0, 0, 1]
]) ➞ [
  [0, 1, 1],
  [1, 0, 1],
  [1, 1, 0]
]

reverseImage([
  [1, 1, 1],
  [0, 0, 0]
]) ➞ [
  [0, 0, 0],
  [1, 1, 1]
]

reverseImage([
  [1, 0, 0],
  [1, 0, 0]
]) ➞ [
  [0, 1, 1],
  [0, 1, 1]
]*/


//Answer:
function reverseImage($image) {
	for($k=0; $k<count($image) ; $k++){
		for($l=0; $l<count($image[$k])  ;$l++) {
			if($image[$k][$l] == 0){
				$image[$k][$l]++;
			}
		else{
		$image[$k][$l]--;
		} 

	} 
}
return $image;
}