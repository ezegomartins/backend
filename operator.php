<?php
declare(strict_types=1);
require 'database.php';
// //operators
// //unary
// /** 
// assignment=
// concatenation.
// arithmetic operation +-/*%
// not 

// binary
// comparison operator ==,<=,>=,!=
// logical operator &&,||


// ternary operators
// comparison operators ===,!==,
// () ?:
// */
// $gender=0;0=male,1 =female
// $is_gender=($gender !==0) ? 'male' :'female';
// echo $is_gender;

// QUESTION :Write a php program to print the myltiply of 7 from 1....1000.prints one number per line
//answer (steps)
//write a loop that runs from 1...1000
#use the module operator to click if the current number in the loop is dividible
#wrap the step above in a condiditonal statement
#print the number if it divisible by 7
#each printed number should be on a single line

         
            // $num =1;
            // while ($num <= 1000){
            //     echo "the num is :$num <br>";
            //     $num++;
            // }
        
        
    // for ($i=0;$i <=1000; $i++) {
    //     if (($i % 7) === 0) {
    //         echo $i . "</br>";
    //     }

    // }
    // $count = 1;
    // while(  $count <= 1000) {
    // if (($count % 7) ===!0) {
    // echo $count . "</br>"; 
    // }
    
    // $count ++;
    // }
    // write a php program that swaps out two characters in a single strings
    // $name1 = 'ezego';
    // $name2 = "martins";

    // function swapvalues(&$name1, &$name2)
    // {
        // $name1 = $name1 ^ $name2;
        // $name2 = $name1 ^ $name2;
        // $name1 = $name2 ^ $name1;  
    
    // }
    // swapvalues($name1, $name2);
    // echo $name1, '' , $name2;
    // write a php program and compute the sum of the digits of an integer
    // $number1=15;
    // $number2=30;
    // $total=$number1+$number2;
    // echo $total;


    // CREATE TABLE `student`.`students` (`name` VARCHAR(60) NOT NULL , `age` INT NOT NULL , `state_of_origin` VARCHAR(15) NOT NULL , `nationality` VARCHAR(20) NOT NULL , `id` INT NOT NULL ) ENGINE = MyISAM;
    
// crud
// c=> create[INSERT INTO `universities` (`name` , `state_of_location` , `number_of_lecturers` ,`id`) VALUES ('university of Abuja' ,'Abuja',200, NULL);]
// r=> read[SELECT * FROM `universities`;]
// u=> update[UPDATE `universities` SET `number_of_lecturers` =201;]
// d=> delete[  DELETE FROM `universities` where `id` =1;]

$sql = "INSERT INTO `universities` (`name`, `state_of_location`,`number_of_lecturers`,`id`) VALUES ('Unilorin','kwara',190,NULL)";
$statement=$conx->prepare($sql);
$statement->execute();
var_dump($statement);


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form title</title>
</head>
<body>
        <form action="method=post">
        <fieldset>
        <legend>University form</legend>
        <label for="university">Name of university</label>
        <p class="required_field">This field is required</p>
        <input type="text" name="university" class="university" id="univeristy" required minlength="5">
        <label for="state">state where the university</label>
    
    </fieldset>




        </form>

</body>
</html>