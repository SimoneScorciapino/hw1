
<?php 
    /*require_once 'auth.php';
    if (!$userid = checkAuth()) {
        header("Location: login.php");
        exit;
    }*/
?>

<html>

  <?php 
    /*
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $userid = mysqli_real_escape_string($conn, $userid);
    $query = "SELECT * FROM users WHERE id = $userid";
    $res_1 = mysqli_query($conn, $query);
    $userinfo = mysqli_fetch_assoc($res_1);*/
  ?>
<html>
    <head>
    <meta charset="utf-8">
        <title>Homework 1</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="home.css">
        
    </head>

    <body>
    <nav>
            <div id="links">
               <a href ="logout.php">Log Out</a>
               <a href="starting5.php">mettiti alla prova</a>
               <a href="stats2.php"> le tue stats </a>
               <a href ="blog.php">vedi anche</a>
            </div>
        </nav>
    <header>
            <div id="titolo">
            <h1>Benvenuto in Basket Room</h1>  
            </div> 
        </header>
        <footer>
            <address>Corso Web Programming M-Z</address>
            <p>Simone Scorciapino 1000001800</p>
        </footer>
    
    </body>
</html>