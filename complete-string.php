<?php

// Complete String
// Max. Marks 100

// A string is said to be complete if it contains all the characters from a to z. Given a string, check if it complete or not.

// Input
// First line of the input contains the number of strings N. It is followed by N lines each contains a single string.

// Output
// For each test case print "YES" if the string is complete, else print "NO"

// Constraints
// 1 <= N <= 10
// The length of the string is at max 100 and the string contains only the characters a to z
// Sample Input
// (Plaintext Link)

// 3
// wyyga
// qwertyuioplkjhgfdsazxcvbnm
// ejuxggfsts
// 
// 

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
function isComplete($str) {
	$str = array_unique(str_split($str));
	if (count($str) == 27) {
		return true;
	}
	
	return false;
}
for($i = 0; $i < $n; $i++) {
   $string = fgets($handle);
   if(isComplete($string)){
   	 $r = 'YES';
   } else {
   	 $r = 'NO';
   }
   echo $r . "\n";
}