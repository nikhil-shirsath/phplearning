<?php


function isprime($prime){
for($i =2; ceil($i<=$prime/2) ; $i++){
    if($prime %$i ==0){
        return  false;
        
    }
   
    return true;
}
}

if(isprime(5)){
    echo " is a prime no";
}else{
    echo " is not a prime no ";
}