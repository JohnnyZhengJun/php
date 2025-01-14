<?php
    $student_name = "Steven";
    $student_age = 20;
    $student_marks = 99.49;
    $is_excellent = true;

    // gettype has to use with echo or print to know datatype
    // var_dump() doesn't need to use with echo or print. 
    if($student_marks > 90)
    {
        if($is_excellent)
        {
            print("$student_name is a excellent student getting $student_marks marks");
        }
    }
    else 
    {
        $is_studying = false;
    }
    /*
     *trim() -> removes leading and trailing spaces from a string
     * strlen() -> returns the length of a string
     * str_word_count() -> returns the number of words in a string
     * strrev() -> returns the string in reverse order (e.g: GGWP -> PWGG)
     * strpos() -> returns the position of the first occurrence of a substring in a string
     * strtolower() -> returns the string in lowercase
     * strtoupper() -> returns the string in uppercase
     * ucfirst() -> returns the string with the first character in uppercase
     * 
     */
?>