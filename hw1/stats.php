<?php
 
// Verifica se è stata passata l'opzione "name" nella query string
if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // Effettua la chiamata all'API NBA per ottenere i dati del giocatore
    $api_url = 'https://api-nba-v1.p.rapidapi.com/players?name=' . urlencode($name);
    $api_headers = [
        'x-rapidapi-host: api-nba-v1.p.rapidapi.com',
        'x-rapidapi-key: 7a9e317c3bmsha1f56fa17bdf216p10a41ajsn6a35b35be81b'
    ];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $api_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $api_headers);
    $response = curl_exec($curl);
    curl_close($curl);

    // Decodifica la risposta JSON ottenuta dall'API
    $decodedResponse = json_decode($response, true);

    // Restituisce la risposta decodificata come JSON
    header('Content-Type: application/json');
    echo json_encode($decodedResponse);
}

// Verifica se è stata passata l'opzione "id" nella query string
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Effettua la chiamata all'API NBA per ottenere le statistiche del giocatore
    $api_url = 'https://api-nba-v1.p.rapidapi.com/players/statistics?id=' . urlencode($id) . '&season=2020';
    $api_headers = [
        'x-rapidapi-host: api-nba-v1.p.rapidapi.com',
        'x-rapidapi-key: 7a9e317c3bmsha1f56fa17bdf216p10a41ajsn6a35b35be81b'
    ];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $api_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $api_headers);
    $response = curl_exec($curl);
    curl_close($curl);

    // Decodifica la risposta JSON ottenuta dall'API
    $decodedResponse = json_decode($response, true);

    // Restituisce la risposta decodificata come JSON
    header('Content-Type: application/json');
    echo json_encode($decodedResponse);
}
?>

