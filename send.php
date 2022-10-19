<?php
// database connection code

echo"Hello";
$con = mysqli_connect('localhost', 'root', '','bookstore');

// get the post records
        $unm = $_GET['usernm'];
        $mail = $_GET['email'];
        $snm = $_GET['shopnm'];
        $pass = $_GET['pw'];
        $conpass = $_GET['confirmpw'];
        $btn = $_GET['register'];

// database insert SQL code
$query = "INSERT INTO record VALUES ('$unm','$mail','$snm','$pass','$conpass')";

// insert in database 
$rs = mysqli_query($con, $query);

if($rs)
{
	echo "Contact Records Inserted";
}
else
echo "Couldn't insert data ";
?>
