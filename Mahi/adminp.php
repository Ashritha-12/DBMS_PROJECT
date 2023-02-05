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

/*Navigation Bar CSS*/
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

}

.ab1{
  margin-top: 25px;
  margin-bottom: 25px;
  padding: 10px;
  border: 1px solid #03071e; 
  margin-left:35px;
  font-size: 21px;
  width: 1200px;
}

.ab1:hover{
  color:#d00000;
  border-color: #d00000;
  box-shadow: -2px 4px 10px -1px #6a040f;
}

a{
  text-decoration: none;
  color: #03071e;

}

a:visited {
  color: #03071e;
  text-decoration: none;
}

a:hover{
  color:#d00000;
}




</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="http://localhost/Mahi/mainpage.php">ABCD Theater</a>
  <a href="http://localhost/Mahi/movies.php">Movies</a>
  <a href="#about">About Us</a>
</div>


<div class="ab">
    <h2 class="sec">Moderators Page</h2>
    <hr class="hr1">
    <div class="ab1"><a  href="http://localhost/Mahi/movielist.php">&#10022 View Movie List Currently Playing</a></div>
    <div class="ab1"><a href="http://localhost/Mahi/insertmovie.php">&#10022 Insert New Movie</a></div>
    <div class="ab1"><a href="http://localhost/Mahi/deletemovie.php">&#10022 Delete Movie Playing</a></div>
</div>

</body>
</html>