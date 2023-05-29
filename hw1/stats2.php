<?php 
 
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Le Migliori Statistiche</title>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="statistiche_.css">
        <script src="stats.js" defer></script>
    </head>
    <body>
      <nav>
            <div id="links">
               <a href ="logout.php">Log Out</a>
               <a href="starting5.php">best all time</a>
               <a href="blog.php"> leggi qui </a>
               <a href ="home.php">torna alla home</a>
      </nav>
            </div>
        <header>
            <div id="titolo">
            <h1>Le migliori statistiche solo in Basket room</h1>  
            </div> 
        </header>
            <form id="player_1">
                Inserisci il nome di un atleta
                <input type='text' id='player'>
                <input type='submit' id='submit' value='Cerca'>
              </form>
        
            <section id="player-view">
            </section>
        
            
        
            <section id="statistic-view">
              <h1>Statistiche giocatore:</h1>
            </section>
          
              <section id="album-view">
              </section>

    <div id="playerInfo"></div>
    <footer>
            <address>Corso Web Programming M-Z</address>
            <p>Simone Scorciapino 1000001800</p>
        </footer>
    
    </body>
    </html>