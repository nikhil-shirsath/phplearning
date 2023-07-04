<?php
/**
 * array() = this function is used to create an array .
 * print_r() = this function is used to display an array. 
 * is_array(array name ) = this function used to check the given param is array or not.
 * array_search( niddle means value , arrayname ) : this function is used to 
 *                      search a value in the array if the value is present in the 
 *                      array then it will be return the first time avalable that value this  index.
 * 
 * array_slice(array name , lenth to remove) ; this function is used to remove array element 
 *                      and it  desplays its coppy it doesnt make changes in real array . 
 * 
 * array_chunk( array name , arrays partition size ) : this funtion is used to break an array in small parts 
 *                      on the basis of the given size. it also doesnt make changes in real array .
 * 
 * var_dump (pass a variable) = this functio is used to dump an variable .
 *              To dump information about a variable, use the var_dump in PHP. 
 *              This function provides structured data about the
 *  
 *              specified variable, including its type and value.
 */



$cars = array(
    0=>'car1',
    1 =>'car2',
    2 =>'car3',
    3 =>'car4',
    4 => 'car5');   // function to create an array .

echo "<pre>";
print_r($cars);  // function to display array .
echo "</pre>";
$try =5;
var_dump($try );// this function used to tell the information about the param like its data and value.
echo "<br>"; 
var_dump(is_array($cars)); // is_array() used to check whether given param is array or not it returns value in boolean.

if( !is_array ($cars)){
    echo"<br> cars array not avalable ";
}else{
    echo "<br> cars array is avalable ";
}

echo " <br>  value avalable at index no : ". array_search('car2',$cars);


$arr1 = array(1,2,3,4,5,56,6,7,8);
echo " <br>  array_search () using to search ". array_search(5,$arr1);// this fuction searches value.

echo "<pre>";
print_r($arr1);  // function to display array .
echo "</pre>";


echo "<pre>";
print_r(array_slice($arr1 ,5,-3));  // function partition an array .
echo "</pre>";

echo "<pre>";
print_r($arr1);  // function to display array .
echo "</pre>";


$arrp1 = array_slice($arr1 , -8);
$arrp2 = array_slice($arr1,5);

echo "<pre> array part1";
print_r($arrp1);  // function to display array .
echo "</pre> <br>";
$chunked = array_chunk($arr1 , 4); // this will break array with 4 size sub arrays.

echo "<pre> array part2";
print_r($chunked);  // function to display array .
echo "</pre>";
?>
