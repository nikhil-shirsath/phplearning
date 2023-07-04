<?php

/**
 * function is a block of code which is used to perform a task which 
 * is used repeatedly in the program.
 * 
 * functinon does not execute automatically when page load it 
 * executes when function called.
 * 
 * in fuction may me no , one or more then one parameters .
 * it may return a value or not . 
 * there are 2 types of functions 
 *  pre defined := function which are difined at the time of creating a language
 *  and user defined.  := which are defined by the developers.
 */

 echo "<h1> <center>function  uses function keyword to create </center></h1> <br>";


function square($no){
    // echo "$no. hii";
    $ans  = $no *$no;
    // echo $ans."<br>";
    return $ans;
}

for( $i =1 ; $i <=10  ; $i++ ){

   $arr[$i] = $ans = square($i);
}
echo "<pre>";
print_r($arr);



/**
 * implode() : the implode function is returns a string from the
 * elments of an array .
 * 
 * syntaxt implode(seprator , array ); 
 */
$arr = array (2,3,4,4,67,687,45,3,342,3,);
print_r($arr);

$arr2= array_pop($arr);

 array_push($arr,40);

print_r($arr2);

print_r($arr);

/**
 * 
 * implode() : this function is used to conver an array to string .
 *          it takes two parameter seprator and array .
 * 
 * first param is used to add symbols at the joint means as glue.
 */

 $str = implode("a",$arr);
 echo "$str";

 $stringArr = array("hello" => "nikhil","how are you "=>"i am fine");

 print_r($stringArr);

 $str1= implode("_",$stringArr);
 echo "$str1";
 $aaa = array_keys($stringArr);
 print_r ($aaa);



 /**
  * explode() ; this is a special function which takes string as input.
  and convert that string to array and returns a array.

  this function takes 3 arguments seperator, string and limit 

  seperator :acts as  implode()'s glue.
  string : string which we have to convert in array .
  limit : limits of the keys .
  */

  $str2 = "hello how are you all is ok or not ";// in this string space will worlks as delemeter.

  $arr3 = explode(" ",$str2,3);

  print_r( $arr3);  //string has been converted to array.