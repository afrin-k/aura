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
    <h1 id="quote-section">QUOTE OF THE DAY</h1>
    <div class="quote">
      <div class="quote1">
        <p id="quote-text">Loading quote...</p>
        <p id="quote-author"></p>
      </div>
    </div> 
    <script>
      fetch("https://api.allorigins.win/raw?url=https://zenquotes.io/api/random")
      .then((response) => response.json())
      .then((data) => {
      const quote = data[0].q;
      const author = data[0].a;
      document.getElementById("quote-text").innerText = `“${quote}”`;
      document.getElementById("quote-author").innerText = `— ${author}`;
     })
      .catch((error) => {
      document.getElementById("quote-text").innerText =
      "Could not load quote. Try again later.";
      console.error("Error fetching quote:", error);
    });
    </script>       
    <div class="gratitude-section">
      <h1>GRATITUDE</h1>
      <h4>A GROWING LIST OF APPRECIATION</h4>
      <h4>WHAT ARE YOU GRATEFUL FOR TODAY?</h4>
      <div class="gtt">
        <input type="text" id="task" placeholder="Grateful for ?" />
        <button class="gbutton" onclick="addTask()">Add</button>
        <table>
          <thead>
            <tr>
              <th>Gratitude List</th>
            </tr>
          </thead>
          <tbody id="table"></tbody>
        </table>
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
