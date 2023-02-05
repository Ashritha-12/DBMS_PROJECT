<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
  </head>

<style>

/* Below line is used for online Google font */

@import url(http://fonts.googleapis.com/css?family=Raleway);

h2{
padding: 30px 35px;
margin: -10px -50px;
text-align:center;
font-size: 30px;
}

h2{
padding: 30px 35px;
margin: -10px -50px;
text-align:center;
font-size: 30px;
}


div.container{
width: 900px;
height: 610px;
opacity : 1;
margin-left : 500px;
margin-top : 150px;
font-family: 'Raleway', sans-serif;
}


div.main{
width: 400px;
padding: 10px 50px 25px;
border: 2px solid gray;
border-radius: 10px;
font-family: raleway;
float:left;
margin-top:50px;
backdrop-filter:blur(16px);
box-shadow: 10px 10px 10px #242423;
alignment : center;
}


input[type=text],input[type=tel]{
width: 100%;
height: 40px;
padding: 5px;
margin-bottom: 25px;
margin-top: 5px;
border: 2px solid #ccc;
color: #4f4f4f;
font-size: 16px;
border-radius: 5px;
}


label{
color: #f4a261;
font-size: 19px;
font-weight: bold;
}


input[type=submit]{
font-size: 16px;
background: linear-gradient(#090130 50%, #08bbe3 100%);
border: 1px solid #fff;
color: #ffffff;
font-weight: bold;
cursor: pointer;
width: 100%;
border-radius: 5px;
padding: 10px 0;
outline:none;
}


input[type=submit]:hover{
background: linear-gradient(#a2a2d0 5%, #77b5fe 100%);
}


/* Addition of sign_up_page */
body {
    background: linear-gradient(to right, rgba(243, 228, 226, 0.2)0%, rgba(164, 195, 178, 0.2)100%) ,url(https://swall.teahub.io/photos/small/220-2205714_get-the-latest-movies-data-src-kodi-tv.jpg) no-repeat fixed center;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    font-family: Montserrat;
}


/* Alert for wrong credentials*/
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
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

    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

    $un=$_POST['uname'];
    $ph=$_POST['ph'];
    $sql = "SELECT * FROM `customer` WHERE `c_name` LIKE '$un' AND `phno` LIKE '$ph'";
    $result = mysqli_query($conn, $sql);
    
    
    if (mysqli_num_rows($result) > 0){
    header('Location: http://localhost/Mahi/customerinfo.php');

    }
    else{
      echo '<script type ="text/JavaScript">';
      echo 'alert(" Wrong Credential!")';  
      echo '</script>';  
    }
  
}


?>


<div class="container">
   <div class="main">
      <h2 style="color:#f4a261 ;">Admin Login</h2>
         <form method="post" action="customerinfo.php">

         <label>User Name:</label>
         <input type="text" name="uname" id="uname"/>

         <label>Phone Number:</label>
         <input type="tel" name="ph" id="ph"/>

         <input type="submit" class="btn btn-primary" name="submit" value="Login"  >
         </form>
     </div>
</div>

</body>

<script>

</script>

</html>