<!-- <html>
<body style = "background-color: #d3d3d3;">
<h1 style = "text-align:center;" >Welcome </h1>

</body>
</html> -->

<?php
require 'db.php';
// <!-- define ('DB_NAME','mnc24');
// define ('DB_USER','mnc24');
// define ('DB_PASSWORD','NDXyngL2');
// define ('DB_HOST','sql.njit.edu');

// $link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
// if(!$link){
//   die('Could not connect: ' .mysql_error());
// }
// $db_selected = mysql_select_db(DB_NAME,$link);
// if(!$db_selected){
//   die('Can\'t use ' .DB_NAME .': ' .mysql_error());
// }
// echo 'Connected to Database'."</br>"; -->

$value = $_GET['first_name'];
$value2 = $_GET['last_name'];
$value3 = $_GET['email'];
$value4 = $_GET['phone_number'];
$value5 = $_GET['gender'];
$value6 = $_GET['birthday'];
$value7 = $_GET['password'];

$sql = "select * from accounts where email='$value3'";
$results = runQuery($sql);
if(count($results) > 0)
{
	header("Location: exists.php");


}else{

$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) values ('$value3','$value','$value2','$value4','$value6', '$value5', '$value7')";
$j = runQuery($sql);
header("Location: login.php");
}

?>