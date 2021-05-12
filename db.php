

<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_Connect($servername,$username,$password) ;
  if(!$conn){
  echo "cannot connected to the db".mysqli_connect_error();
  }
  echo"connection sucessful";


$sql="CREATE DATABASE my_prp";
if($conn->query($sql)===TRUE){
    echo "db created";

}
else{
echo "db not created".$conn->error;
}

 $conn->close();
?>