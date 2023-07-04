

<?php
$alfa = range('a','z');

for( $a=0; $a<24; $a++){
    for($b=0; $b <=$a ; $b++){
        echo " $alfa[$b]";
    }
    echo "</br>";


    
}
?>


<?php

/**
 The die() function prints a message and exits the current script.

This function is an alias of the exit() function. */

$site = "http://www.w3schools.com/";
fopen($site,"r")
or die("Unable to connect to $site");
?>