
const players = document.querySelectorAll(".player");

players.forEach(function(player) {
  player.addEventListener("click", function() {
    let name = player.textContent;
    console.log("Click su " + name);
    
    // Invia il nome del giocatore alla pagina PHP dei preferiti tramite Fetch API
    fetch("save_favs.php", {
      method: "POST",
      headers: {
        "Content-type": "application/x-www-form-urlencoded"
      },
      body: "name=" + encodeURIComponent(name)
    })
    .then(response => response.text())
    .then(data => {
      console.log(data);
      // Puoi eseguire altre azioni o reindirizzare l'utente qui
    })
    .catch(error => {
      console.error(error);
    });
  });
});



