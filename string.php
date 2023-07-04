<?php

/**
 * string is a sequence of charecters 
 * we can write it inside the double quotes or single quotes 
 * 
 * 
 * single quotes :  ' $var' when we writes a variable inside the single quotes then 
 *              it acts as a string for that variable and print it as it is .
 * 
 * double quotes : "$var" when we writes a variable inside double quotes php identify it
 *                 print that variables value .
 * 
 * concadination : to join two strings is called concadination . oprator is used to concadinate two strings. 
 */

 $str= "  hello nikhil how are you ";
 echo $str;

 echo "$str"; //this will print variables value.
 echo '$str'; // this will print $str as a string .

 /**
  * functions on the string 
    strtoupper() ; convert string to upper case .
    strtolower(): convert a string to lower case .
  */

  $stru = strtoupper($str);
  echo "</br> $stru";
  $strl = strtolower($str);
  echo "</br> $strl";

  $lcf= lcfirst($str); 
  echo "</br> $lcf";

  $ucf= ucfirst($str); 
  echo "</br> $ucf";

  $ucw= ucwords($str); //converts upper case of the every words charecter.
  echo "</br>" .$ucw."\n" ;
/**
 * 
 * str_replace() : this function is used to find and replace aany charecter,
 *      word or sub string in a string.
 *          it does not change in actual  string.
 * 
 * str_replace(find,replace,string);
 */

 $name = "nikhil pandit shirsath";

 $after_change = str_replace("i","j",$name);

 echo " </br>$after_change ";
 echo " </br>$name";

 echo "</br>".str_replace("nikhil","pradip",$name)."</br>";

 $palandrome= "aba";
 $rev = strrev($palandrome);
 echo "$rev</br>";
 
 echo substr($name,6,-8);

/**
 * str_word_count() : this function is used to count no of words in string.
 * str_length() ; counts length of the string
 * str_repeat(): used to repeat a string multiple times .
 *  str_repeat(string,multiplier); takes two arguments string and multipliers
 */

 echo str_word_count($name)."<br>";
 echo strlen($name)."<br>";
 echo str_repeat($name,10)."<br>";

 


 ?>

 

  