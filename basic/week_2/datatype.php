<?php
$student_name = "Steven";
$student_age = 20;
$student_marks = 99.49;
$is_excellent = true;

// gettype has to use with echo or print to know datatype
// var_dump() doesn't need to use with echo or print. 
if ($student_marks > 90) {
    if ($is_excellent) {
        print("$student_name is a excellent student getting $student_marks marks");
    }
} else {
    $is_studying = false;
}
/*
     * trim() -> removes leading and trailing spaces from a string
     * strlen() -> returns the number of characters in a string including space
     * str_word_count() -> returns the number of words in a string
     * strrev() -> returns the string in reverse order (e.g: GGWP -> PWGG)
     * strpos() -> returns the position of the first occurrence of a substring in a string
     * strtolower() -> returns the string in lowercase
     * strtoupper() -> returns the string in uppercase
     * ucfirst() -> returns the string with the first character in uppercase
     
     * str_pad() -> returns the string padded with a specified string to a specified length
     * e.g: str_pad("Hello", 10, "0", STR_PAD_LEFT) -> "00000Hello"
    
     * str_shuffle() -> returns the string with the characters shuffled
     
     * str_replace() -> returns the string with all occurrences of a substring replaced with another substring
     * syntax: str_replace(find, replace, string)
     
     * substr() -> returns a part of the string
     * syntax: substr(string, start, length)
    
     * str_cmp() -> returns the comparison of two strings .. same as C++    
    
     * exponentiation operator (**) same as python. e.g: 2**3 -> 8
      
     * equal operator (==) same as python, c++. e.g: 2 == 2 -> true
     * identical operator (===) -> Returns true if the two variables are equal and of the same type
     */
