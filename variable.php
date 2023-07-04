<?php

echo "<h1> variables </h1>";
print "<p> variables are containers which are used to store data temparary . </br> the data is stored at the memory address and to know that address we gives name to it .</p>";
print " </br> in php every  variable starts with a doller sign ($) and dont need and keyword the declation and defination both at the same time time dont need to declare before. ";
echo (" </br>

    Acording to the value it automatically decides its data type ."
    ." it may be string , integer , double , object , refrence and array " 
    ."</br> In php variables are globel we can use them wherever we want to use in intire program."
    ."this is a case sensitive language" 
);
echo "<ul> 
        <li> variables value can be change at any time thats why its called variable.</li>
     </ul>";
$x = 10 ;
 print $x."</br>" ;
$x = 16;
print $x;

$_underscore = "</br> uderscore charecter is allowed for variable name";
print  $_underscore;

for ($i = 0; $i<= 5; $i++){
echo "</br>";
}

print "<h1> CONCADINATION uses (.) opertor </h1><BR>";

print "joining of to or more strings , variable , variable and string togather is called concadination .";

echo "</br> this is called concadination ";
$y = 112;
echo $x.$y; // this is called concdination .

/**
 * suppose we have 2 diffrent strings and we have to make it one in this case  conadination works .
 * here we are taking two diffrent variables and concadinating them and creating a single line.
 */

 $first= " Nikhil ";
 $last = " shirsath ";
echo "</br>hello my name is ".$first.$last;

for ($i = 0; $i<= 5; $i++){
    echo "</br>";
    }

echo "<h1>Operators </h1>";
echo ("</br> <p> operators are special symbols which are used to tell comiler to perform  arithmetic  logical and conditional opration between the operands . </p>");
echo(
    "
    <ul>
    <strong>
    <li>arithmetic</li>
    <li>conditional</li>
    <li>logical</li>
    <li>assigmental</li>
    <li>concadination</li>
    <li>Comparision</li>
    </strong>
    
    </ul>"
)
?>
