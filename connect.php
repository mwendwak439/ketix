<?php
class Database{

private $host="localhost";
private $username="root";
private $password="";
private $db="ketix";
function connect () {

$connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);



}
function read(){
$this->connect();


}
function save(){



}
}
//$connection = mysqli_connect($host,$username,$password,$db);
// $first_name="kennedy";
// $last_name="kimanzi";
// $query="insert into users(first_name,last_name) values ('$first_name','$last_name')";
// mysqli_query($connection,$query);
// echo mysqli_error($connection);
$query="select * from users";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){

echo("<pre>");
print_r($row);
echo("</pre>");
}


?>