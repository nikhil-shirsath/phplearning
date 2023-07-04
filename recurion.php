<?php

/**
 * when function call itself again and again is called recusion.
 * there is must be a termination condition otherwise it will be resion of stack overflow.
 * 
 * function uses stack memory so when we uses recusion then the stack memory is fulls .
 */

//  function infi(){
//     echo " hello \n";
//     infi();     //no temination condition so it will be stack overflow.
//  }

//  infi();

/**
 * print values from 1 to 10 using recusion
 */

 function show ($i){
    echo "$i <br>";
    
    if($i ==10 ){
        return ;
    }

    show(++$i);
 }
 show (1);