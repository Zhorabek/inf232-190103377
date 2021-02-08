/Write a function that returns true if a number is a palindrome.

Examples
isPalindrome(838) ➞ true

isPalindrome(4433) ➞ false

isPalindrome(443344) ➞ true
Notes
A palindrome is a number that remains the same when reversed.
Bonus: Try solving this without turning the number into a string.*/


//Answer:
function isPalindrome($n) {
	if(strrev($n) ==$n) {
		return true;
}
	else{
		return false;
	}
}