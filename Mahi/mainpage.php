
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
<style>
    .button {
        background-color:#660000;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }
    body {
        background-image:url('pic4.gif');
        background-size:100%;
        background-repeat: repeat-y;
        background-attachment: fixed;
        height:100%;
        width:100%;
        overflow: hidden;
    }
    .fade-in-text {
        display: inline;
        font-family: Arial, Helvetica, sans-serif; 
      }
      .button{
        padding: 15px 32px;
        text-align:justify;
        text-decoration: none;
        position: absolute;
        left: 50%;
        transform: translateX(25%);
      }

      .button.one{
        transform: translateX(-250%);
      }
      .button.two{
        transform: translateX(100%);
      }

      .glow {
        font-size: 80px;
        color: #fff;
        text-align: center;
        margin-left:0;
        animation: glow 1s ease-in-out infinite alternate;
      }
      
      @-webkit-keyframes glow {
        from {
          text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #ffb84d, 0 0 40px #ffb84d, 0 0 50px #ffb84d, 0 0 60px #ffb84d, 0 0 70px #ffb84d;
        }
        
        to {
          text-shadow: 0 0 20px #fff, 0 0 30px #ff9900, 0 0 40px #ff9900, 0 0 50px #ff9900, 0 0 60px #ff9900, 0 0 70px #ff9900, 0 0 80px #ff9900;
        }
      }
      .button.three{
        
        transform: translateX(-50%);
      }
    
</style>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
    <div class="fade-in-text">
       
        <h6 class="glow">Welcome to ABCD Theatre</h6>
        <script>
            $( "div.fade-in-text" ).slideUp( 300 ).delay( 12800 ).fadeIn( 400 );
         
        </script>
        <a href='http://localhost/Mahi/admin.php'><button class="button one">Admin Login</button></a>
    
    <a href='http://localhost/Mahi/customerlogin.php'><button class="button two">Customer Login</button></a>
    <a href='http://localhost/Mahi/movies.php'><button class="button three">Movies</button></a>
</div>
</body>
</html>