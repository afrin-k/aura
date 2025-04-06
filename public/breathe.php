<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Breathe With Aura</title>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <style>
    select#audioSelect {
      padding: 8px 12px;
      font-size: 16px;
      border: 2px solid #394B7E;
      border-radius: 3px;
      background-color: #fff;
      color: #394B7E;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      cursor: pointer;
    }

    select#audioSelect:focus {
      outline: none;
      border-color: #394B7E;
      box-shadow: 0 0 5px #394B7E77;
    }

    select#audioSelect option {
      color: #394B7E;
      background-color: #fff;
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
          link.href = "../assets/css/style.css" + "?v=" + new Date().getTime();
          document.head.appendChild(link);
        })
        .catch((error) => console.error("Error loading header:", error));
    });
  </script>

  <h1 class="breathe-section">MEDITATION</h1>
  
  <div class="breathe">
    <div class="label">CHOOSE YOUR AUDIO</div>
    <select id="audioSelect" onchange="resetAudio()">
      <option value="../assets/audio/forestsounds.mp3">Forest Sounds</option>
      <option value="../assets/audio/tibetanbowls.mp3">Tibetan Bowls</option>
      <option value="../assets/audio/oceanwaves.mp3">Ocean Waves</option>
    </select>

    <audio id="audioPlayer" controls>
      <source id="audioSource" src="../assets/audio/forestsounds.mp3" type="audio/mp3" />
      Your browser does not support the audio element.
    </audio>
  </div>

  <script>
    function resetAudio() {
      const selectedAudio = document.getElementById("audioSelect").value;
      const audioSource = document.getElementById("audioSource");
      const audioPlayer = document.getElementById("audioPlayer");

      audioPlayer.pause();
      audioSource.src = selectedAudio;
      audioPlayer.load();
    }
  </script>

  <div class="mhea">
    <h1 class="yo">YOGA SESSION</h1>
    <p class="pas">MEDITATIVE YOGA ASANAS FOR STRESS RELIEF</p>
  </div>

  <div class="yoga-aasans">
    <div class="aasan1">
      <img src="../assets/img/padmasana.png" alt="" />
      <div class="aasan1-content">
        <p>ARDHA PADMASANA</p>
        <ol>
          <li>Sit in a cross-legged position.</li>
          <li>Keep hands in Gyan Mudra.</li>
          <li>Close eyes, focus on breath, hold for 5 minutes.</li>
        </ol>
      </div>
    </div>

    <div class="aasan2">
      <div class="aasan2-content">
        <p>VIPARITA KARANI</p>
        <ol>
          <li>Lie down and rest your legs against a wall.</li>
          <li>Keep arms relaxed, palms facing up</li>
          <li>Breathe naturally and feel the tension release.</li>
        </ol>
      </div>
      <img src="../assets/img/vkariniasana.png" alt="" />
    </div>

    <div class="aasan1">
      <img src="../assets/img/balasana.png" alt="" />
      <div class="aasan3-content">
        <p>BALASANA</p>
        <ol>
          <li>Sit on your heels and extend arms forward.</li>
          <li>Rest your forehead on the mat.</li>
          <li>Breathe naturally and feel the tension release.</li>
        </ol>
      </div>
    </div>

    <div class="aasan2">
      <div class="aasan2-content">
        <p>SUKHASANA</p>
        <ol>
          <li>Sit cross-legged and close your eyes.</li>
          <li>Take slow, deep breaths</li>
          <li>Focus on grounding yourself in the present.</li>
        </ol>
      </div>
      <img src="../assets/img/sukhasana.png" alt="" />
    </div>
  </div>
    <!-- Surya Namaskar Video Section -->
    <div class="surya-video" style="text-align: center; margin-top: 40px">
      <h2 style="color: #394b7e; margin-bottom: 20px">SURYA NAMASKAR</h2>
      <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/6IUyY9Dyr5w?rel=0&modestbranding=1"
        title="Surya Namaskar - Yoga For Complete Beginners"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      >
      </iframe>
    </div>


  <div id="footer-container"></div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      fetch("footer.php")
        .then((response) => response.text())
        .then((data) => {
          document.getElementById("footer-container").innerHTML = data;

          let link = document.createElement("link");
          link.rel = "stylesheet";
          link.href = "../assets/css/style.css" + "?v=" + new Date().getTime();
          document.head.appendChild(link);
        })
        .catch((error) => console.error("Error loading footer:", error));
    });
  </script>
</body>

</html>