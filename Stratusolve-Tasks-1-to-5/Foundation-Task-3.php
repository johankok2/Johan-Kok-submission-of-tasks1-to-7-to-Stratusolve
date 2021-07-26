<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Foundation-Task-3: Palindrome</title>
</head>
<body>
<?php
class Palindrome {
   public static function isPalindrome($word) {
 // ============ Apply both row 7 and 8 to make this "input word(s)" a Palindrome ============
 // $word = strtolower($word); // make the string lowercase
 // $word = preg_replace('/[^a-zA-Z]/','', $word); // remove all characters except [a-zA-Z]
    if ($word == strrev($word))
      return TRUE;
    else
	    return FALSE;
    } 
  }
    if (Palindrome::isPalindrome("Never Odd Or Even"))
echo 'The "input word(s)" is a Palindrome.';
    else
echo 'The "input word(s)" is NOT a Palindrome.';
?>
</body>
</html>


