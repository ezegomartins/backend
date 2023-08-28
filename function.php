<?php
// Use a conditional to get the add event

$output = '';
if (isset($_POST['submit'])) 
{
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $output = add($number1, $number2);

}

function add($num1, $num2)
{
    return $num1 + $num2;
}
// write a function that does the addition feature
// Echo the output
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
<form action="" method="post">

<fieldset>
<legend>My PHP Calculator</legend>

<label for="number1">number 1</label>
<input type="tel" name="number1" id="number1" >

<label for="number2"> number 2</label>
<input type="tel"name="number2" id="number2" >

<input type="submit" name="submit" value="add" class="submitbutton">

<p>
<?= $output?>
</p>

</fieldset>
</form>
<?php
$output = '';
if (isset($_GET['submit'])) 
{
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $output = sub($number1, $number2);

}

function sub($num1, $num2)
{
    return $num1 - $num2;
}
?>
<form action="" method="Get">

<fieldset>
<legend>My PHP Calculator</legend>

<label for="number1">number 1</label>
<input type="tel" name="number1" id="number1" >

<label for="number2"> number 2</label>
<input type="tel"name="number2" id="number2" >

<input type="submit" name="submit" value="sub" class="submitbutton">

<p>
<?= $output?>
</p>

</fieldset>

</body>
</html>
