<?php
include 'auth.php';
if (!checkAuth()) {
    header("Location: home.php");
    exit;
} 
$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
$user = $_SESSION["_agora_user_id"];
// Recupera i giocatori preferiti dell'utente loggato
 // Esempio: assume che l'ID dell'utente sia 1
 
$sql = "SELECT players.name,players.image FROM players INNER JOIN favs ON players.id = favs.id_player WHERE favs.id_user = $user";
$result = $conn->query($sql);



$conn->close();
?>


<html>
<head>
    <meta charset="utf-8">
    <title>Preferiti</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="favs.css">
   
</head>
<body>
    <nav>
        <div id="links">
            <a href="logout.php">Log Out</a>
            <a href= "starting5.php">best all time</a>
            <a href="stats2.php"> le tue stats </a>
            <a href="blog.php">vedi anche</a>
        </div>
    </nav>
<h1>Giocatori preferiti:</h1>
<div id="preferitiContainer">
    <?php
     if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $playerName = $row['name'];
            $playerImage = base64_encode($row['image']);
            echo '<div class="preferito">';
            echo '<img src="data:image/jpeg;base64,' . $playerImage . '" alt="' . $playerName . '">';
            echo '<span>' . $playerName . '</span>';
            echo '</div>';
        }
    } else {
        echo 'Nessun giocatore preferito.';
    }
   ?>
    
</div>
<footer>
        <address>Corso Web Programming M-Z</address>
        <p>Simone Scorciapino 1000001800</p>
</footer>
</body>
</html>
