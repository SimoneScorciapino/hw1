<?php 

include 'auth.php';

if (!checkAuth()) {
    header("Location: home.php");
    exit;
} 
$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

// Se è stato passato un parametro imageURL, seleziona le immagini con cui riempire gli square
$sql = "SELECT name, image FROM players";
$result = $conn->query($sql);

$html = '';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $image = base64_encode($row['image']);
        $html .= '<div class="player">';
        $html .= '<img src="data:image/jpeg;base64,'.$image.'" alt="'.$name.'" />';
        $html .= '<span>'.$name.'</span>';
        $html .= '</div>';
    }
}

$conn->close();
?>

<html>
    <head>
    <meta charset="utf-8">
        <title>Starting 5</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="starting.css">
        <script src="starting5.js" defer></script>
    </head>
    <body>
        <nav>
            <div id="links">
               <a href ="logout.php">Log Out</a>
               <a>chi siamo</a>
               <a href="stats2.php"> le tue stats </a>
               <a href ="blog.php">vedi anche</a>
            </div>
        </nav>
            
            <h1>Aggingi i tuoi giocatori preferiti:</h1>
            <a href="favs.php"> vedi preferiti</a>
            <div id="container">
            <?php echo $html; ?>
            </div>
            <footer>
            <address>Corso Web Programming M-Z</address>
            <p>Simone Scorciapino 1000001800</p>
        </footer>


    </body>
</html>
