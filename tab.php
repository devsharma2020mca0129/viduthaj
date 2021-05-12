<?php
$servername="localhost";
$username="root";
$password="";
$dbname="my_prp";
// $conn= mysqli_connect($servername,$username,$password,"$dbname");
$conn=mysqli_connect("localhost","root","","my_prp");
  if(!$conn){
  echo "cannot connected to the db".mysqli_connect_error();
  }
  echo"connection sucessful";
 
$sql="CREATE TABLE tab22(firstname varchar(20),lastname varchar(20) ,country varchar(20),bloodgroup varchar(15) )";
if($conn->query($sql)===TRUE){
    echo "table created";

}
else{
    echo "error".$conn->error;
}