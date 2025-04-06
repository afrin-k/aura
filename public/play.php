<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Play With Aura</title>
  </head>
  <body>
    <div id="header-container"></div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        fetch("header.php")
          .then((response) => response.text())
          .then((data) => {
            document.getElementById("header-container").innerHTML = data;

            let link = document.createElement("link");
            link.rel = "stylesheet";
            link.href =
              "../assets/css/style.css" + "?v=" + new Date().getTime(); // Cache busting
            document.head.appendChild(link);
          })
          .catch((error) => console.error("Error loading header:", error));
      });
    </script>
    <div class="playsection">
      <h1 class="play1">GAMES</h1>
      <p class="pplay">A LITTLE FUN GOES A LONG WAY — READY TO RELAX?</p>
      <div class="linep"></div>
      <div class="gamescards">
      
      <div>  
      <div class="card1 space-y-4">
          <img src="../assets/img/homecard.png" alt="" />
          <div class="game1">
            <a href="breathing.php">Breathing Game</a>
          </div>
        </div>
        <div class="card2 space-y-4">
          <img src="../assets/img/game4card.png" alt="" />
          <div class="game2">
            <a href="bubblepop.php">Bubble Pop Game</a>
          </div>
        </div>
    </div>
    
    <div>
        <div class="card3">
          <img src="../assets/img/game2card.png" alt="" />
          <div class="game3">
            <a href="soundboard.php">SoundBoard Game</a>
          </div>
        </div>
        <div class="card4">
          <img src="../assets/img/game3card.png" alt="" />
          <div class="game4">
            <a href="doodle.php">Doodle Game</a>
          </div>
        </div>
    </div>
      </div>
    </div>
    <div id="footer-container"></div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        fetch("footer.php")
          .then((response) => response.text())
          .then((data) => {
            document.getElementById("footer-container").innerHTML = data;

            // Force reloading styles
            let link = document.createElement("link");
            link.rel = "stylesheet";
            link.href =
              "../assets/css/style.css" + "?v=" + new Date().getTime(); // Cache busting
            document.head.appendChild(link);
          })
          .catch((error) => console.error("Error loading header:", error));
      });
    </script>
  </body>
</html>
