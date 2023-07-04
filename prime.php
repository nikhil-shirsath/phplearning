<?php


function isprime($prime){
    
for($i =2; ceil($i<=$prime/2) ; $i++){
    if($prime %$i ==0){
        return  false;
        
    }
     return true;
}
}
 function primecheck($no){
    $val =$no;
    if(isprime($val)){
        echo " is a prime no";
    }else{
        echo " is not a prime no ";
    }
 }

 primecheck(22);

 ?>