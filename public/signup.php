<?php
include 'db.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($check);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = "User already exists!";
    } else {
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        if ($stmt->execute()) {
            header("Location: ./home.php");
            exit();
        } else {
            $message = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Signup</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        background-color: #394b7e;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: white;
      }

      .signup-container {
        background-color: white;
        color: #394b7e;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        width: 350px;
        text-align: center;
      }

      .signup-container h2 {
        margin-bottom: 20px;
      }

      label {
        font-weight: 600;
        display: block;
        text-align: left;
        margin-bottom: 6px;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 2px solid #394b7e;
        border-radius: 6px;
        margin-bottom: 20px;
        font-size: 14px;
        box-sizing: border-box;
      }

      button[type="submit"] {
        background-color: #394b7e;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      button[type="submit"]:hover {
        background-color: #2f3f6a;
      }

      .error-message {
        margin-top: 15px;
        color: red;
        font-size: 14px;
      }

      .error-message a {
        color: purple;
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="signup-container">
      <h2>Signup To Aura</h2>
      <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required />

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required />

        <button type="submit">Sign Up</button>
      </form>

      <?php if (!empty($message)): ?>
        <div class="error-message"><?= $message ?></div>
      <?php endif; ?>
    </div>
  </body>
</html>
