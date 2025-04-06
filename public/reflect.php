<?php
session_start();
include 'db.php';

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Fetch user ID
$username = $_SESSION["username"];
$userResult = $conn->query("SELECT id FROM users WHERE username = '$username'");
$user = $userResult->fetch_assoc();
$user_id = $user['id'];

// Handle adding gratitude
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['task'])) {
    $task = trim($_POST['task']);
    if (!empty($task)) {
        $safeTask = $conn->real_escape_string($task);
        $conn->query("INSERT INTO gratitude_list (user_id, gratitude_text) VALUES ($user_id, '$safeTask')");
    }
    // No redirect – just re-fetch the updated list
}

// Handle deleting gratitude
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']);
    $conn->query("DELETE FROM gratitude_list WHERE id = $delete_id AND user_id = $user_id");
    // No redirect – just re-fetch the updated list
}

// Fetch updated gratitude list
$listQuery = $conn->query("SELECT id, gratitude_text, created_at FROM gratitude_list WHERE user_id = $user_id ORDER BY created_at DESC");
$gratitudes = $listQuery->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reflect With Aura</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
    .gbutton{
        text-transform: uppercase;
        background-color: #516CB3;
        border: none;
        color: white;
        padding: 8px;
        margin-left: 4px;
        border-radius: 1px;
    }
    #task
    {
        width: 200px;
        padding: 6px 10px;
        border-radius: 2px;
        font-size: 14px;
        color: #516CB3;
        margin-bottom: 10px;
    }
    td{
      font-family: Montserrat;
      text-transform: uppercase;
      font-size: 14px;
      font-weight: 600px;
    }
    
    </style>
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
    <h1 id="quote-section">QUOTE OF THE DAY</h1>
    <div class="quote">
      <div class="quote1">
        <p id="quote-text">Loading quote...</p>
        <p id="quote-author"></p>
      </div>
    </div> 
    <script>
      fetch("quotes.php")
      .then(response => response.json())
      .then(data => {
      document.getElementById("quote-text").innerText = `“${data.q}”`;
      document.getElementById("quote-author").innerText = `— ${data.a}`;
      })
      .catch(error => {
      document.getElementById("quote-text").innerText = "Could not load quote. Try again later.";
      console.error("Quote loading error:", error);
      });
    </script>       
    
    <div class="gratitude-section">
      <h1>GRATITUDE</h1>
      <h4>A GROWING LIST OF APPRECIATION</h4>

      <form method="POST">
        <input type="text" name="task" id="task" placeholder="What are you grateful for today?" required />
        <button type="submit" class="gbutton">ADD</button>
      </form>
      <table>
        <tbody id="table">
          <?php foreach ($gratitudes as $entry): ?>
            <tr>
              <td><?= htmlspecialchars($entry['gratitude_text']) ?></td>
              <td>
                <form method="POST" style="display:inline;">
                  <input type="hidden" name="delete_id" value="<?= $entry['id'] ?>">
                  <button type="submit" class="gbutton">X</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div id="footer-container"><?php include 'footer.php'; ?></div>
  </body>
</html>
