<?php  
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:login.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <style>


.hello{
    text-align: center;
    margin-top: 25px;
    background: var(--color-bg);
}
 
.btn{
    background-color: blue;
    padding: 8px;
    margin: 10px;
    border-radius: 10%;
}
    
    </style>
</head>
<body>
    <div style="background-image:url(images/nature2.jpg);background-repeat:no-repeat; width:100%; height:100%">
<h1 class="hello">Welcome
    <?php echo $_SESSION['username'];
    ?>
</h1>





 <div class="footer" >
    <a href="logout.php"><button class="btn">Log out</button></a>
 </div>
 </div>
</body>
</html>