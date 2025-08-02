<?php

function vCount($string): int {
    $count = 0;
    for($i=0;$i<strlen($string);$i++) {
       if(in_array($string[$i], [
            'a', 'e', 'i', 'o', 'u',
            'A', 'E', 'I', 'O', 'U'
        ])) {
            $count++;
        }
    }
    return $count;
}
/*
function reverseString($string): string {
    return strrev($string);
}
*/
function reverseString($string): string {
    $reversed ="";
    for($i=strlen($string)-1;$i>=0;$i--)
    {
        $reversed .= $string[$i];
    }
    return $reversed;
}

$strings = ["Hello", "World", "PHP", "Programming"];
 
foreach ($strings as $string) {
    echo "Original String: $string, ";
    echo "Vowel Count: ".vCount($string).", ";
    echo "Reversed String: ".reverseString($string)."\n";
}

?>
