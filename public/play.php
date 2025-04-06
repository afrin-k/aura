<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div id="header-container"></div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        fetch("header.html")
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
      <h1 class="play1">Games</h1>
      <p class="pplay">A LITTLE FUN GOES A LONG WAY — READY TO RELAX?</p>
      <div class="linep"></div>
      <div class="gamescards">
        <div class="card1">
          <img src="../assets/img/homecard.png" alt="" />
          <div class="game1">
            <a href="">Breathing Game</a>
          </div>
        </div>
        <div class="card2">
          <img src="../assets/img/game4card.png" alt="" />
          <div class="game2">
            <a href="">Bubble Pop Game</a>
          </div>
        </div>
        <div class="card3">
          <img src="../assets/img/game2card.png" alt="" />
          <div class="game3">
            <a href="">SoundBoard Game</a>
          </div>
        </div>
        <div class="card4">
          <img src="../assets/img/game3card.png" alt="" />
          <div class="game4">
            <a href="">Doodle Game</a>
          </div>
        </div>
      </div>
    </div>
    <div id="footer-container"></div>
    <script>
      function addTask() {
        var task = document.getElementById("task");
        var text = task.value.trim();
        if (text === "") {
          alert("Please enter something");
          return false;
        }
        var table = document.getElementById("table");
        var row = table.insertRow();
        var cell = row.insertCell();
        cell.innerText = text;
        var remove = document.createElement("button");
        remove.innerText = "Remove";
        remove.onclick = function () {
          row.remove();
        };
        remove.classList.add("gbutton");
        cell.appendChild(document.createTextNode(" "));
        cell.appendChild(remove);

        task.value = "";
      }

      document.addEventListener("DOMContentLoaded", function () {
        fetch("footer.html")
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
