<?php
/**
 * array is a special type of variable which can contains multiple set
 * of valuea which is same type of values and stores it in continues memory.
 * 
 * 
 * in php array() is used to create an array and we can also create an array using [] brackets and it stored inside another variable.
 */


/** using array() */

 $arr = array(1,2,3,4,5,6,7,8,9,10);
  
 /**
  * there are three types of arrays .
  1. index array : an array which starts from numarical indexing and stores value in coninous memory allocation .
  2.Associative array  : an array which contains string indexing . and it stores value in key value pairs.
  3. Multidimentional array : an array which contains one or more array.
  */

  // index array

  $arr1 = array("maruti","honda","hondai","bmw","oddi");
  
  //echo $arr1; # array to string conversion not possible 

  print_r($arr1); # print_r( here we gives array name to print ) is a functio which is used to display the array on the webpage or server.
echo "<br>";
echo "<pre>" ; #pre  tag is used to beautify the elements of the array.
print_r($arr1);

echo "</pre>";
 $arr1[5] ="nikhil shirsath";  # THIS WILL STORE THE VALUE AT THE 5th POSITION OF THE ARRAY.   $arr[]= "hello ";  # by this new value will be always append at the last position.
$arr1[] ="hello";
    print_r ($arr1);


// Associate array
/**
 *  this array works on the key value pair basis.
 *  */ 

 $arr2 = array (
    'name' => " nikhil shirsath",
     'cumpany' => 'vita',
    'age ' =>22,
    'contact' => array('9111589140','6353068568', array(1,3,4,5,6))       # this is multidimentional array 
 );

 echo "<pre>";
 print_r ($arr2);


echo"\n";
/** without using array function means using []  */
$sarr=[1,2,3,4,5 =>[51,52=>[521,522,523],53],6,7,8];
print_r($sarr);


  ?>


