/Create a function that returns true if a string contains any spaces.

Examples
hasSpaces("hello") ➞ false

hasSpaces("hello, world") ➞ true

hasSpaces(" ") ➞ true

hasSpaces("") ➞ false

hasSpaces(",./!@#") ➞ false
Notes
An empty string does not contain any spaces.
Try doing this without RegEx.*/

Answer: 
function hasSpaces($str) {
	if(strpos($str,' ')!==false){
		return true;
	}
	else{
		return false;
	}
}