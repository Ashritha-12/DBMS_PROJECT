<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  margin: 0;
  background-color: #03071e;
  font-family: Montserrat;
}

.topnav {
  overflow: hidden;
  background-color: #fb5607;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 21px;
}

.topnav a:hover {
  background-color: #03071e;
  color: #fefae0;  
  border-right-style: solid;
  border-left-style: solid;
  border-color: #fefae0;
}

.topnav a:visited {
  color: #f2f2f2;
}


/* Logo link in Navigation */
.topnav a.active {
  margin: 0;
  font-family: "Lucida Console", "Courier New", monospace;
  width : 230px;
  border-style: dashed;
  border-color: #fefae0;
  font-size : 19px;
  letter-spacing: 2px;
  font-weight: bold;
  background-color: #03071e;
  color: #fefae0;
}

div.ab {
  position: absolute;
  width: 1330px;
  min-height: 500px;
  top: 120px;
  left: 80px;
  padding-top: 0;
  padding-left: 15px;
  margin-bottom: 80px;
  border: 6px solid #fb5607;
  background: #fefae0;
  color: #03071e;
  
}

h2.sec{
    padding-top: 15px;
    margin-top:0;
    font-size: 29px;
    margin-bottom:5px;
    margin-left: 20px;
}

hr.hr1{
    border-bottom: 5px solid #03071e;
    margin-bottom: 20px;
}

.f{
  font-size: 25px;
}

.btn{
    margin-top: 30px;
    position: absolute;
    left: 50%;
}

table, tr, td{
  margin-top: 30px;
  border: 3px solid #03071e; 
  padding: 20px;
}



</style>
</head>
<body>




<?php

if(isset($_POST['submit']))
{     
  $servername='localhost';
  $username='root';
  $password='';
  $dbname = "mahi";

  $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
      }

  $m1=$_POST['m'];
  $mname=$_POST['mname'];
  $lang=$_POST['lang'];
  $syn=$_POST['syn'];
  $gen=$_POST['gen'];
  $rat=$_POST['rat'];

    $sql="INSERT INTO `movies` (`m_id`, `m_name`, `genre`, `imdb_rating`, `synopsis`, `lang`) VALUES ('$m1', '$mname', '$gen', '$rat', '$syn', '$lang')";
    $result = mysqli_query($conn, $sql);


 

}
?>

<div class="topnav">
  <a class="active" href="http://localhost/Mahi/mainpage.php">ABCD Theater</a>
  <a href="http://localhost/Mahi/movies.php">Movies</a>
  <a href="#about">About Us</a>
  <a href="http://localhost/Mahi/adminp.php"> Back To Admin Page</a>
</div>

<div class="ab">
    <h2 class="sec">Insert New Movie Info</h2>
    <hr class="hr1">
    <div class="f">

    <form method="post" autocomplete="off">
    <table align="center">
      <tr>
    <td><label>Movie ID:</label></td>
    <td><input type="text" name="m" id="m"/></td>

    <td><label>Movie Name:</label></td>
    <td><input type="text" name="mname" id="mname"/><br></td>
</tr>

<tr>
    <td>
    <label>Genre:</label></td>
    <td><input type="text" name="gen" id="gen"/></td>
    <td>
    <label>Ratings:</label></td>
    <td><input type="text" name="rat" id="rat"/><br></td>
</tr>

<tr>
    <td>
    <label>Synopsis:</label></td>
    <td>
    <textarea id="syn" name="syn" rows="4" cols="50"></textarea></td>
    
    <td>
    <label>Language:</label></td>
    <td><input type="text" name="lang" id="lang"/></td>

</tr></table>
  <input type="submit" class="btn" name="submit" value="Insert"  >
    </form>
</div>
</div>
</body>
</html>
 