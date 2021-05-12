<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/responsive.css">
<style>

  
*{
    margin: 0;
    padding: 0;
}
body{
    background-image: url(y.jfif);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    font-family: sans-serif;
    margin-top: 40px;
}
.reg{
    width: 800px;
    background-color: rgb(0,0,0,0.6);
    margin:auto;
    color: white;
    padding:10px 0px 10px 0px;
    text-align: center;
    border-radius: 15px 15px 0px 0px;
}

.mane{
    background-color: rgb(0,0,0,0.5);
    width:800px;
    margin: auto;
    color: white;
}

form{
    padding :10px;
}
#name{
    width: 100%;
height: 100px;    
}
.name{
    margin-left: 25px;
    margin-top: 30px;
    width:125px;
    color:white;
    font-size: 20px;
    font-weight: 700;
}


.firstn{
position: relative;
left:200px;
top:-37px;
line-height: 40px;
border-radius: 6px;
padding: 0 22px;
font-size: 16px;
}

.lastn{
    position: relative;
    left:417px;
    top:-80px;
    line-height: 40px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color:white;
}
.firstl{
    position: relative;

color:white;
text-transform: capitalize;
font-size: 14px;
left: 203px;
top:-47px;

}
.lastl{
    position: relative;

/* color:white; */
text-transform: capitalize;
font-size: 14px;
left: 175px;
top:-47px;

}

.country{
    position: relative;
    left: 200px;
    top:-37px;
    line-height: 40px;
    width:482px;
    border-radius: 6px;
    font-size: 16px;
    padding:0 22px;
    /* color:white; */

}
.radio{
    display:inline-block;
    padding-right: 70px;
    font-size: 25px;
    margin-top: 15px;
    margin-left: 25px;
    color:white;
    width:20px;
    height: 20px;
    border-radius: 50%;
    cursor: pointer;
    outline: none;
}
.radio input{
width: 20px;
height: 20px;
border-radius: 50%;
cursor: pointer;
outline: none;
} 
a:hover{
    background-color: #5390F5;
}
button{
    background-color: #3BAF9F;
    /* display: block; */
    position: relative;
    left:300px;
    text-align: center;
    border-radius: 12px;
    border:2px solid #366473;
    padding: 14px 110px;
    width: 25px;
outline: none;
color:white;
cursor:pointer;
transition: 0.25;
}
button:hover{
    background-color: #5390F5;
}
.option{
    position: relative;
    left:200px;
    top:-37px;
    line-height: 40px;
    width:532px;
    height: 40px;
    border-radius: 6px;
    padding:0 22px;
    font-size: 16px;
    color:#555;
    outline:none;
    overflow:hidden;
    
}
</style>
</head>
<body>
    <div class="reg">
<h1>Contact Us</h1>
    </div>
<div class="mane">

<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div id="name">
        <h2 class="name">Name</h2>
        <input class="firstn" type="text" name="first_name"><br>
        <label class="firstl">First name</label>
    <input class="lastn" type="text" name="last_name">
    <label class="lastl">Last name</label>
    </div>
   
<h2 class="name" >Country</h2>
    <input class="country" type="text" id="a" name="country">
   <br>
   <br>
 
    <h2 class="name">Blood Group</h2>
    <select class="option" name="blood_group">
        <option disabled="disabled" selected="selected">--choose option</option>
    <option>A+</option>
    
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>O+</option>
    <option>O-</option>
    <option>AB+</option>
    <option>AB-</option>
    </select>
    <br>
    <br>


<br>
<br>

<br>
    <a class="name" style="width:80px;height:20px;border:2px solid black;background-color: rgb(240, 179, 179);color:black;font-size: 24px;" href="vishudhajivam@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>&nbspMail Us</a>
    
<a class="name" style="width:80px;height:20px;border:2px solid black;background-color: rgb(224, 171, 171);color:black;font-size: 24px;"href="Tel: 9304970109"><i class="fa fa-phone" aria-hidden="true"></i>
    Call us</a>
   <br>
<button type="submit">Register</button>

</div>
</form>
</div>
    
</body>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$fn=$_POST["first_name"];
echo "<center><h1>DETAILS ARE AS FOLLOWS:</h1></center>";
echo "<br>";
echo $fn;
$ln=$_POST['last_name'];
echo $ln;
echo "<br>";
$country=$_POST['country'];
echo $country;
echo "<br>";
$bg=$_POST['blood_group'];
echo $bg;
echo "<br>";
}

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


 $sql="INSERT INTO tab22(firstname ,lastname,country,bloodgroup) values('$fn','$ln','$country','$bg')";
 if(mysqli_query($conn,$sql)){
     echo "submit";
 }
 
?>
</html>