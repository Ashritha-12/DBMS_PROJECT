
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie info</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
<div class="m1">
        <div class="user">
            <img src="https://th.bing.com/th/id/OIP.CmkoOQ9fO6g-7nS_DB76FgHaJW?pid=ImgDet&w=1024&h=1293&rs=1" alt="">
            <h3 class="name">Dune</h3>
            
        </div>
    
        <nav class="navbar">
            <ul>
                <li><a href="#home">Movie Details</a></li>
                
                <li><a href="#feedback">Booktickets</a></li>
            </ul>
        </nav>
    
</div>


    
    
    
    <div class="container">
    
        <section class="home" id="home">
    
            <h3 class="name">Movie Details</h3>
            <h4 class="post">
            <p>Dune (titled onscreen as Dune: Part One) is a 2021 American epic science fiction film directed by Denis Villeneuve and written by Villeneuve, 
            Jon Spaihts, and Eric Roth. It is the first of a two-part adaptation of the 1965 novel by Frank Herbert, primarily covering the first half of the book. Set in the far future, it follows Paul Atreides as his family, 
            the noble House Atreides, is thrust into a war for the deadly and inhospitable desert planet Arrakis.</p>
            </section>
    
        
 
        <section class="feedback" id="feedback">
    
            <h1 class="heading">Book Tickets</h1>
             <h3 class="heading"> note that this movie is screened only on specific timing, for this show time is 10:00am</h3>
            <div class="row">


            <form method="post">


    <td><input type="date" name="m" id="m" placeholder="dd/mm/yy" min="2022-01-17" max="2022-01-19" class="box" /></td>

    <td><input type="text" name="mname" id="mname" placeholder="number of seats to be booked" max=100  min=1 class="box" /><br></td>

    <td><input type="text" name="gen" id="gen" placeholder="name" class="box" /></td>

    <td><input type="text" name="rat" id="rat" placeholder="number" class="box" /><br></td>

    <td><input type="text" name="lang" id="lang" placeholder="email" class="box" /></td>

  <input type="submit" class="btn" name="submit" value="Submit"  >
    </form>

                </div>
            </div>
        </section>

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
  $gen=$_POST['gen'];
  $rat=$_POST['rat'];
  $mid='E001';

    $sql="INSERT INTO `customer` (`c_id`, `c_name`, `email`, `phno`, `m_id`) VALUES (NULL, '$gen', '$lang', '$rat', '$mid')";
    $result = mysqli_query($conn, $sql);


    $sql="UPDATE `shows` SET `seats`=`seats`-'$mname' WHERE date LIKE '$m1'";
    $result = mysqli_query($conn, $sql);
 
}
?>





     </body>
    </html>