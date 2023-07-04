<?php
$arr=[0,1]; 
$a=0;
$b=1;
$i=5; $sum=0; $itr =6 ;
echo "$a$b";
for($i =0 ; $i <$itr-2 ; $i++){
$arr[] = $sum = $a+$b;
echo $sum;
$a=$b;
$b=$sum;
}
echo "<pre>";
print_r($arr);
echo "</pre>";
?>