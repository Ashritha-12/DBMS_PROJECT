
<!DOCTYPE html>
<html>
<head>
<title>
Movies
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 50%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  height:70vh;
  position:relative;
}

.card button {
  border: none;
  border-radius: 15px;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #dc5303;
  text-align: center;
  cursor: pointer;
  width: 80%;
  font-size: 18px;
  position:absolute;
  bottom:10px;
  left:32px;
}

.card button:hover {
  opacity: 0.9;
}
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: left;
  background-color: black;
  margin-top: -5px;
}
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: absolute;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
.design{
height : 80px;
width: 250px;
}
.checked {
  color: orange;
}

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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

a{
    text-decoration: none;
}

a:visited{
    color: white;
    text-decoration: none;
}

a:hover{
    color: white;
    text-decoration: none;
}

</style>
</head>




<body style="background-color:#000000
;">
<div class="topnav">
  <a class="active" href="#home">ABCD Theater</a>
  <a href="#news">Movies</a>
  <a href="#about">About Us</a>
</div>

<br>
<br>


<div class="row">
<div class="column">
    <div class="card">
     
	      <p style="font-size:40px"><b>Dune</b><p>		  
		  <p style="font-size:20px"> Genre : Action , Science Fiction , Adventure , Drama , Fantasy <p>
		  <p style="font-size:20px">Imdb_rating : 8.1/10 <p>
		  <p style="font-size:20px">Actors : Timothee Chalamet , Rebecca Ferguson <p>
		  <p style="font-size:20px"> Show time : 7:00pm
	  <p style="color:blue;">
	  <span class="fa fa-star checked"></span>
	  <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star-half-full checked"></span>
      <span class="fa fa-star"></span>
	  <br><br>
	   <button ><a href="http://localhost/Mahi/movieinfo.php#home">BOOK TICKET</a></button>
    </div>
  </div>


  <div class="column">
    <div class="card" >
	  <p style="font-size:40px"> <b>Akhanda </b><p>
	  <p style="font-size:20px"> Genre : Action , Drama , Adventure , Fantasy <p>
	  <p style="font-size:20px">Imdb_rating : 7.8/10 <p>
	  <p style="font-size:20px">Actors : Balakrishna , Pragya Jaiswal<p>
	  <p style="font-size:20px"> Show time : 6:00pm
	  <p style="color:blue;">
	  <span class="fa fa-star checked"></span>
	  <span class="fa fa-star checked"></span>
      <span class="fa fa-star-half-full checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
	  <br><br>
	  <button onclick="validate()">BOOK TICKET</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
      
	   <p style="font-size:40px"><b>Antim</b><p>  <b></b>	  
	   <p style="font-size:20px"> Genre : Action , Drama , Adventure , Thriller <p>
	   <p style="font-size:20px">Imdb_rating : 7.2/10 <p>
	   <p style="font-size:20px">Actors : Salman khan , Mahima Makwan <p>
	   <p style="font-size:20px"> Show time : 6:30pm
	   <p style="color:blue;">
	   <span class="fa fa-star checked"></span>
	  <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
	  <br><br>
	   <button onclick="validate()">BOOK TICKET</button>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
     
	  <p style="font-size:40px"><b>Eternals</b><p>	  
	  <p style="font-size:20px"> Genre : Action , Science Fiction , Adventure , Drama , Fantasy , superhero<p>
	  <p style="font-size:20px">Imdb_rating : 6.8/10 <p>
	  <p style="font-size:20px">Actors :Gemma Chan , Richard Madden<p>
	  <p style="font-size:20px"> Show time : 7:30pm
	  <p style="color:blue;">
	  <span class="fa fa-star checked"></span>
	  <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star-half-full checked"></span>
	  <br><br>
	   <button onclick="validate()">BOOK TICKET</button>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<div class="row">
  <div class="column">
    <div class="card">
      
      <p style="font-size:40px"><b>Sooryavanshi</b><p>	  
	  <p style="font-size:20px"> Genre : Action , Drama , Adventure , Thriller , Crime film <p>
	  <p style="font-size:20px">Imdb_rating : 6.3/10<p>
	  <p style="font-size:20px">Actors : Akshay kumar , Katrina Kaif , Ajay Devgn ,  Ranveer Singh <p>
	  <p style="font-size:20px"> Show time : 8:00pm
	  <p style="color:blue;">
	  <span class="fa fa-star checked"></span>
	  <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star-half-full checked"></span>
	  <br><br>
	   <button>BOOK TICKET</button>
	  <br><br>
    </div>
  </div>

</div>

</body>
</html>
