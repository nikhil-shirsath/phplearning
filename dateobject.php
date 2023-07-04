<?php
/**
 * default time zone may be diffrent .
 * if any one is regestering to your website and you want to handle them using server .
 * So , that time zonemust be your country.
 * using this we can see who have purches which date on which time.
 */

echo "<pre>";
print_r(getdate());
echo "<pre>";

/**
 * getdate() : this funtion returns
 *      Array 
(
    [seconds] => 7
    [minutes] => 16
    [hours] => 18
    [mday] => 1
    [wday] => 6
    [mon] => 7
    [year] => 2023
    [yday] => 181
    [weekday] => Saturday
    [month] => July
    [0] => 1688228167   //timestamps in miliseconds
)
but this is not set as our countery timezone.
 */

 /**
  * date_default_timezone_set("country time zone") : as argument we sends a country timexone 
  */

  date_default_timezone_set("ASIA/KOLKATA");
  
echo "<pre>";
print_r(getdate());
echo "<pre>";

$date = getdate();
echo $date['seconds']."</br>";  //seconds will be print
echo $date['hours'  ]."</br>";  //seconds will be print
echo $date['month']."</br>";  //seconds will be print
echo $date['wday']."</br>";  //seconds will be print
echo $date['wday']."</br>";  //seconds will be print

echo $date['weekday']."</br>";  //weekday will be print
echo $date['year']."</br>";  //year will be print
echo $date['yday']."</br>";  //yday will be print
echo $date['minutes']."</br>";  //minutes will be print
echo $date['0']."</br>";  //no of miliseconds sence 1970  will be print


echo time()/60/60/24/365; //converting timestamp to years 

echo "</br>";

echo "</br>".date('jS-D(NS)-l-F-Y');

//01/july/2023
echo "<br>". date('d/F/Y-L h:i:s:a',time());//full date time string 
// wherw i is for menute and a for am/pm
/**
 * strtotime (pass time as a string ): this function takes date and time as a string and convert it to miliseconds
 */

 $dob = strtotime("31-05-2001 22:43");

 echo "<br>".date('d/m/Y D h:i:s a',$dob);