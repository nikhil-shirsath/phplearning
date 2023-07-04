<?php
$alfa = range('a','z');
for ($i =0; $i <25 ; $i++){
    for($j= 24 ; $j >= $i ; $j--){
        echo $alfa[$j];
    }
   
    echo "</br>"; 
}