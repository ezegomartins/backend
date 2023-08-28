<?php


// <!-- $myName = "martins"; -->
// <!-- function changeName($name) -->
// <!-- { -->
    // <!-- $myName = "ezego"; -->
    // <!-- echo $myName; -->
// <!-- }  -->
// <!-- changename($myName); -->
// <!-- echo $myName; -->

$myName = "silver";
// echo strlen($myName);
function swapname($myName)
{
    $count = strlen($myName) -4;
    $firstCharacter = $myName[0];
    $middlecharacter = $myName[$count];
    $myName[$count] = $firstCharacter;
    $myName[0] = $middlecharacter;
    echo $myName;


}
    swapname($myName);
    // echo $myName;
?>

<!-- read psr1 and psr2 -->

Annonimous functions



\






