<?php

echo "<h1> Arithmetic  Operators </h1>";

echo " </br> addition ";
$a = 100;
$b = 3;
 echo "add". $a+$b."</br>";
 echo "sub".$a-$b."</br>";
 echo "multipy " . $a*$b."</br>";
 echo " divide " . $a/$b."</br>";
 echo " remender " . $a%$b."</br>";
 echo " increament " . $a++ ."</br>";
 echo " decreament " . --$a."</br>";
 echo " equals to  " . var_dump ($c = $a == $b)."</br>";
print var_dump(22);


$num1 = 6 ; $num2="6";
echo "</br>".var_dump($num1 <> $num2);

for ($i=0; $i <=5; $i ++){
    echo "</br>";
}


echo "<h1> Logical and Conditional   Operators </h1> </br>";
echo " those operators which  are used to perform logical operation such as or  and . </br>";
echo ("
<ul>
<strong>
    <li>logical AND &&</li>
    <li>logical OR || </li>
    <li>Ternery operator  expression ? true part  : false part </li>
</strong>

</ul></br>");

$a =2;
$b =7;
 echo "logical && operation  ". var_dump($a && $b)."</br>"; 

 echo "logical || operation  ". var_dump($a || $b)."</br>"; 

 echo "ternery operator operation  ". var_dump($a < $b ? " first no is less ".$a+$b : " last no is less ")."</br>"; 

 for ($i=0; $i <=5; $i ++){
    echo "</br>";
};

echo "<h1> Assigment Operators </h1>";
echo "\n";

 echo $a =4 ."\n";
 echo $b=4 ."\n";

 echo $a+=$b ."\n";     // here in every step the variable a value is changin again and again at every step .
 echo $a-=$b ."\n";
 echo $a*=$b ."\n";
 echo $a/=$b ."\n";
 echo $a%=$b ."\n";


?>