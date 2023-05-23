<?php
//DAY 2 ASSIGNMENT
//Write a PHP program to find the largest among three numbers.
$a=readline("Enter a:");
$b=readline("Enter b:");
$c=readline("Enter c:");
if($a>$b) {
    if($a>$c) {
        echo "$a is Largest number";
    }
    else {
        echo "$c is Largest number";
    }
}
else {
    if($b>$c) {
        echo "$b is Largest number";
    }
    else {
        echo "$c is Largest number";
    }
}
?>
