<?php

include 'auth.php';

if (!checkAuth()) {
    header("Location: home.php");
    exit;
} 

$user = $_SESSION["_agora_user_id"];

if (isset($_POST['name'])) {
    $name = $_POST['name'];

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

    // Verifica se la coppia di valori esiste già
    $query = "SELECT id FROM players WHERE name = '$name'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $playerId = $row['id'];

        // Verifica se la coppia di valori esiste già nella tabella 'favs'
        $checkQuery = "SELECT id_user, id_player FROM favs WHERE id_user = '$user' AND id_player = '$playerId'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if ($checkResult && mysqli_num_rows($checkResult) > 0) {
            echo "La coppia di valori esiste già nella tabella 'favs'.";
        } else {
            // Inserimento nella tabella 'favs'
            $insertQuery = "INSERT INTO favs (id_user, id_player) VALUES ('$user', '$playerId')";
            $insertResult = mysqli_query($conn, $insertQuery);

            if ($insertResult) {
                echo "Inserimento nella tabella 'favs' riuscito.";
            } else {
                echo "Errore nell'inserimento nella tabella 'favs': " . mysqli_error($conn);
            }
        }

        mysqli_free_result($checkResult);
        mysqli_free_result($result);
        mysqli_close($conn);
    } else {
        echo "Nessun giocatore trovato con il nome specificato.";
    }
}

?>



