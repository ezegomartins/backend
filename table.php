<?php
declare(strict_types=1);
try {
	$connection = new PDO('mysql:host=localhost;dbname=student', 'root', '');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (Exception $e) {
 	echo "Error:" . $e->getMessage();
 }
// Fetch data
 $sql = "SELECT * FROM universities ";
 $universities = $connection->query($sql);
// get all publishers
$publishers = $universities->fetchAll(PDO::FETCH_OBJ);

if (isset($_REQUEST['submit'])) {
	
	 // Insert data
	 $sql = "INSERT INTO `universities` (`name`, `state_of_location`, `number_of_lecturers`, `id`) VALUES (:name, :state, :lecturer_count, :id)";
	$statement = $connection->prepare($sql);
	$statement->execute([
		":name" => $_REQUEST['university'],
		":state" => $_REQUEST['state'],
		":lecturer_count" => $_REQUEST['lecturer_count'],
		":id" => Null
	]);
	 $sql = "SELECT * FROM universities";
	 $universities = $connection->query($sql);
	// get all publishers
	$publishers = $universities->fetchAll(PDO::FETCH_OBJ);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .first-box{
            display:flex;
            font-weight:900;
            font-size:30px
            
        }
        img{
            height: 40px;
        }
		form{display:flex;
             flex-direction:column;
             align-item:center;
             margin-top:2px;
             padding-right:150px;
             margin-left:20px;
        }
        input{
            margin-top:40px;
            height: 50px;
            width: 360px;
            padding-left:20px;
            /* color:bule; */
        }
         .pet{
            padding-top:2px ;
            padding-bottom:140px;
         }
         .pet2{
            margin-left:50px;
            cursor: pointer;
         }
         


	</style>
</head>
<body>
<div class="first-box">
    <img src="20230403_224843.jpg" alt="" srcset="">
    <span>stewie40</span>
</div>
<div>
    <h2>New here?</h2>
    <span class="pet">signing up is easy. it only takes a few step</span>
</div>
<form action="/swapvalue.php" method='post'>
<input type="text" placeholder="Surname">
<input type="text" placeholder="first-Name">
<input type="text" placeholder="Username">
<input type="number" placeholder="phone Number">
<input type="mail" placeholder="Email">
<input type="password" placeholder="password">
<input type="password" placeholder="Repeat Password">
<input type="submit" value="SIGN UP" >

</form>
<p class=pet2>Already have an account? <a href="">login</a> </p>
</body>
</html>