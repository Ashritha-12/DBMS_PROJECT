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
  padding:20px;
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


table, th, td{
  padding: 17px;
  border: 3px solid #03071e; 
  font-size: 19px; 
}

table{
  margin-left: 10px;
}

.customer{
    font-size: 19px;
    margin: 20px;
}



</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="http://localhost/Mahi/mainpage.php">ABCD Theater</a>
  <a href="http://localhost/Mahi/movies.php">Movies</a>
  <a href="#about">About Us</a>
  <a href="http://localhost/Mahi/adminp.php"> Back To Customer Page</a>
</div>

<div class="ab">
    <h2 class="sec">Movie You Booked</h2>
    <hr class="hr1">

    <?php
  session_start();

  $_SESSION['name'] = $_POST['uname'];
    
  $_SESSION['ph']
          = $_POST['ph'];

  $n=$_SESSION['name'];
  $p=$_SESSION['ph'];
  ?>

     
<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "mahi";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   $sql="SELECT movies.m_name, movies.genre, movies.imdb_rating, movies.synopsis, movies.lang FROM `movies`,`customer` WHERE movies.m_id=customer.m_id AND customer.c_name LIKE '$n'";
   $result = mysqli_query($conn,$sql);
?>
<?php
   if (mysqli_num_rows($result) > 0) {
?>
<div class="customer">
    Name : <?php echo $n; ?><br>
    Phone Number : <?php echo $p; ?>
</div>
<table align="center">
<tr>
<td>Movie Name</td>
<td>Ratings</td>
<td>Language</td>
<td>Synopsis</td>
<td>Genre</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr >
<td ><?php echo $row["m_name"]; ?></td>
<td><?php echo $row["imdb_rating"]; ?></td>
<td><?php echo $row["lang"]; ?></td>
<td width="630" ><?php echo $row["synopsis"]; ?></td>
<td width="200" ><?php echo $row["genre"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>

</div>
</body>
</html>