<h1> Table ! </h1>
<p>
<table border =1>

<?php

$host = "localhost";
$user = "test";
$password = "12345";
$database = "test";

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$query = "select * from table_new";
$result = $mysqli->query($query) ;
if ( !$result) 
    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;


while ($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>".$row['name']."<td>".$row['age'];
    }



?>

</table>
