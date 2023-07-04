<?php
echo "<h1> this is conditional statements </h1>";

echo "\n";
echo ("

conditional statements are those line of codes in programming which are used to 
change or control the secquence of execution of program  is called conditional statement . ");

print "\n";
echo (" <h3> If condition </h3> \n 
if condition is true then and then only the function will be performed . ");
$x =10;

 if ($x > 0){
     echo "  value of x is $x greater then 0 thats why if condition is working ";
 }

echo " <h3>Age validating for the voting system </h3>";
print  (" \n "."\n" );

$age = 66;

if ($age >= 18 ){
    echo " you are adult and elligible for indian voting system . <br>";
}

echo " \n";

/*
here we have learn both the things if else and nested if condition  */
if (isset($_POST['marks'])){
   
}else{
    echo " the object is not defined"; 
}



$marks =$_POST['marks'] ;
if ($marks <= 100){
    if( $marks >90){
        echo " passed with first division ";

    }else if ($marks>80){
        echo " you passed in second division ";

    }else if( $marks >70){
        echo " you passd with third division ";
    }else if ($marks >60){
        echo " you passed with fourth division ";
    }else if($marks >=50){
        echo " you passed with fifth division ";
    }else if($marks <50){
        echo " you failed better try .";
    }
}else{
    echo " wrong persentages ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="conditional.php" method="post">
    <input type="text" name ="marks" placeholder =" Enter your persentage. " >

    <button type="submit" value="submit"></button>
</form>

</body>
</html>