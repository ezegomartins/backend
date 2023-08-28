<?php

// Valid Booleans
// $yes = TRUE;//true
// $no = FALSE;//false
// $string = ( bool ) "";
// $int = (bool) 15;//integer   
// $int = (bool) 15.78;//float 
// $int = (bool) 0;//integer 
// $int = (bool) -56;//integer 
// $array = (bool) [2];//false


// echo $string;

$age1 = 20;
$age2 = 25;

function swapvalues(&$age1 , &$age2) 
{
    $age1 = $age1 ^ $age2;
    $age2 = $age1 ^ $age2;
    $age1 = $age2 ^ $age1;
}
echo swapvalues($age1,$age2);
echo $age1, '' , $age2;
?>