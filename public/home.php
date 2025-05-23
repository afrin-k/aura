<!DOCTYPE html>
<html lang="en">

<head>
  <title>Aura</title>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="icon" href="../assets/img/logo.jpg" />
</head>

<body>
  <div id="header-container"></div>

  <script>
    fetch("header.php")
      .then((response) => response.text())
      .then((data) => {
        document.getElementById("header-container").innerHTML = data;
      })
      .catch((error) => console.error("Error loading header:", error));
  </script>

  <div class="herosection">
    <div class="mainbox">
      <h1>AURA</h1>
      <p>a space designed <br />to soothe your mind and uplift your spirit</p>
    </div>
    <img src="../assets/img/herobg.png" alt="herosectionimage" />
  </div>

  <section id="welcome" class="welcome welcome-section">
    <h5>WELCOME TO YOUR OASIS OF CALM</h5>
    <h1>AURA</h1>
    <div class="para">
      <p class="subp">
        In the rush of daily life, we often forget to pause, breathe, and simply be.
        Our minds are cluttered with stress, our bodies tense with exhaustion.
        But what if relaxation was just a breath away?
      </p>
      <p class="subp">
        Each experience on our platform is thoughtfully crafted to help you unwind,
        recharge, and cultivate a sense of inner peace—whether it's through a deep inhale,
        a moment of stillness, or a playful escape.
      </p>
      <p class="mainp">
        <strong>AURA</strong> is a sanctuary designed to help you reconnect with the present moment.
        Through immersive <strong>breathing exercises, mindful sessions</strong>, and engaging
        <strong>stress-relief games</strong>, we bring together the science of relaxation and the art of mindfulness in
        one place.
      </p>
    </div>
  </section>

  <p class="tagline">choose your path to peace</p>

  <div class="home-cards">
    <div class="card1">
      <img src="../assets/img/homecard.png" alt="" />
      <h5 class="card1box">BREATHE IN PEACE, BREATHE OUT STRESS. LET'S BEGIN.</h5>
      <a class="button1" href="../public/breathe.php">BREATHING EXERCISES</a>
    </div>
    <div class="card2">
      <img src="../assets/img/homecard.png" alt="" />
      <h5 class="card2box">FIND PEACE IN THE HERE AND NOW. READY TO TRY?</h5>
      <a class="button2" href="../public/reflect.php">MINDFULNESS SESSIONS</a>
    </div>
    <div class="card3">
      <img src="../assets/img/homecard.png" alt="" />
      <h5 class="card3box">PLAYFUL MOMENTS, PEACEFUL MIND. STEP IN NOW.</h5>
      <a class="button3" href="../public/game.php">STRESS-RELIEF GAMES</a>
    </div>
  </div>

  <div class="line"></div>

  <div class="emergency-section">
    <h1>Emergency Toolkit</h1>
    <p>TAKE A DEEP BREATH — HELP IS HERE!</p>
    <div class="emergency-cards">
      <div class="card1">
        <img src="../assets/img/groundicon.png" alt="" />
        <a class="button4" href="../public/breathe.php">GROUNDING EXERCISE</a>
      </div>
      <div class="card2">
        <img src="../assets/img/boxicon.png" alt="" />
        <a class="button4" href="../public/reflect.php">SQUARE BREATHING</a>
      </div>
      <div class="card3">
        <img src="../assets/img/callicon.png" alt="" />
        <a class="button4" href="../public/emergency.php">CALL FOR HELP</a>
      </div>
    </div>
  </div>

  <div class="line2"></div>

  <section id="contact" class="contactus">
    <h1>CONTACT US</h1>
    <div class="contactbutton">
      <button class="button5">Enter Your Email Here</button>
      <button class="button5">Contact us now</button>
    </div>
  </section>

  <div id="footer-container"></div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      fetch("footer.php")
        .then((response) => response.text())
        .then((data) => {
          document.getElementById("footer-container").innerHTML = data;

          // Reload stylesheet to avoid cache issues
          let link = document.createElement("link");
          link.rel = "stylesheet";
          link.href = "../assets/css/style.css?v=" + new Date().getTime();
          document.head.appendChild(link);
        })
        .catch((error) => console.error("Error loading footer:", error));
    });
  </script>

  <!-- Cookie Consent Banner (Always visible on each visit) -->
  <div id="cookie-banner" style="
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #fff8e1;
      padding: 15px;
      box-shadow: 0 -2px 10px rgba(0,0,0,0.2);
      text-align: center;
      font-family: 'Montserrat', sans-serif;
      z-index: 9999;
    ">
    <span style="margin-right: 10px;">
      This website uses cookies to enhance your experience.
    </span>
    <button onclick="dismissBanner()" style="
        background-color: #394B7E;
        color: white;
        border: none;
        padding: 8px 12px;
        margin-right: 8px;
        cursor: pointer;
        border-radius: 2px;
        text-transform: uppercase;
      ">
      Accept
    </button>
    <button onclick="dismissBanner()" style="
        background-color: #394B7E;
        color: white;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
        border-radius: 2px;
        text-transform: uppercase;
      ">
      Reject
    </button>
  </div>

  <script>
    function dismissBanner() {
      document.getElementById("cookie-banner").style.display = "none";
    }
  </script>
</body>

</html>