<?php

/* 
    !Strings! 
    Move pointer comments 
    to isolate and manipulate
    code blocks. 
*/

/*-------->
<---------*/
/* Single Quote String */
$name = "Steven";
$string_one = 'Hello $name';
echo $string_one;

/* Double Quote String */
$string_two = "Hello $name";
echo $string_two; 

/* Escape Characters */ 
$string_three = "Hello \$name";
echo $string_three; 

$string_four = "Learning to \display \"Hello $name: \" to the screen.";
echo $string_four; 

/* Concatenation */
$string_five = 'Learning to display "Hello ' . $name . '!" to the screen' . "\n";
echo $string_five; 

$name = "Steven";

/* Below equivalent $string_six = $string_six + $string_six etc. */ 
$string_six = 'Learning to display ';
$string_six .= '"Hello ';
$string_six .= $name;
$string_six .= '!" to the screen.';
$string_six .= "\n";

echo $string_six;

?>