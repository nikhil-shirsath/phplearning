<?php
/**
 * math functions are those set of fiunctions which makes our math
 * calculation easy and simple.
 * 
 * rand(start, end): this function takes two params start and limit it generate no bwtween it including this.
 * 
 */

 $ran= rand(-1,2);
 echo "<br>$ran";
 /**
  * mostly used in otp fumction
  */
  $rvalue = rand (1000,9999);
 echo "<br>$rvalue</br>";

 /**
  * ceil(): this function reaches decimal no to its upper limit in whole no.
  * floor(): this function reaches decimal no to its lower limit in whole no.
  */
  
  $a= 5/2;
  echo $a;

  echo "</br>". ceil($a)."</br>"; //round up value 
  echo "</br>". floor($a)."</br>";//round down

  /**
   * pow(base,exponent) : this function used to get a power of a value.
   * sqrt(val ,root) ; this function is used to get sqrt of the funtion,
   */

   echo "<br>".pow(6,6)."</br>";
   echo "<br>".sqrt(pow(6,4))."</br>";

   /**
    * print no along with its sqare 
    */

    for ($i=1; $i<=100 ; $i++){
        echo " <br> $i = ".pow($i,2)."</br>";
    }

    echo "</br><h1> printing 2 powers </h1>";
    for ($i=1; $i<=100 ; $i++){
        echo " <br> $i = ".pow(2,$i)."</br>";
    }
    