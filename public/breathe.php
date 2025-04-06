<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AURA</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    
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
    <h1 class="breathe-section">MEDITATION</h1>
    <div class="breathe">
      <!-- <div class="label">SET YOUR COUNTDOWN TIMER</div> -->
        <div class="timer" id="countdown">00:00</div>

        <!-- <div class="label">CHOOSE YOUR AUDIO</div>
        <select id="audioSelect">
            <option value="../assets/audio/forestsounds.mp3">Nature Sounds</option>
            
        </select> -->
        <audio id="audioPlayer" controls>
          <source id="audioSource" src="../assets/audio/forestsounds.mp3" type="audio/mp3">
          Your browser does not support the audio element.
      </audio>
        <div class="label">PRESS START</div>
        <button class="play" onclick="startTimer()">
            <!-- <img class="play" src="../assets/img/playy.png" alt="Play"> -->
            ►
        </button>
        </div>
    </div>
    <!-- <script>
        let timeLeft = 60; // Default time in seconds
        let timerRunning = false;
        let audio = new Audio();

        function startTimer() {
            if (timerRunning) return; // Prevent multiple timers
            timerRunning = true;

            let selectedAudio = document.getElementById("audioSelect").value;
            audio.src = selectedAudio;

            updateTimer();
        }

        function updateTimer() {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            document.getElementById("countdown").textContent =
                (minutes < 10 ? "0" : "") + minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

            if (timeLeft > 0) {
                timeLeft--;
                setTimeout(updateTimer, 1000);
            } else {
                timerRunning = false;
                audio.play();
                alert("Time's up!");
            }
        }
    </script> -->
    <script>
      let timeLeft = 60; // Default time in seconds
let timerRunning = false;
const audioPlayer = document.getElementById("audioPlayer"); // Reference to audio element

function startTimer() {
    if (timerRunning) return; // Prevent multiple timers from starting
    timerRunning = true;

    // Reset timer display
    timeLeft = 60;
    updateTimer(); // Update UI immediately

    // Start countdown
    let countdownInterval = setInterval(() => {
        if (timeLeft > 0) {
            timeLeft--;
            updateTimer();
        } else {
            clearInterval(countdownInterval); // Stop the timer
            timerRunning = false;
            alert("Time's up!");
        }
    }, 1000);

    // Play audio
    audioPlayer.currentTime = 0; // Reset audio to start
    audioPlayer.play();
}

function updateTimer() {
    let minutes = Math.floor(timeLeft / 60);
    let seconds = timeLeft % 60;
    document.getElementById("countdown").textContent =
        (minutes < 10 ? "0" : "") + minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
}

  </script>
    </div>
    <div class="mhea">
        <h1 class="yo">YOGA SESSION</h1>
        <p class="pas">MEDITATIVE YOGA ASANAS FOR STRESS RELIEF</p>
    </div>
        <div class="yoga-aasans">
            <div class="aasan1">
                <img src="../assets/img/padmasana.png" alt="">
                <div class="aasan1-content">
                <p>ARDHA PADMASANA</p>
                <ol>
                    <li>Sit in a cross-legged position.</li>
                    <li>Keep hands in Gyan Mudra.
                    </li>
                    <li>Close eyes, focus on breath, hold for 5 minutes.</li>
                </ol>
            </div>
        </div>
        <div class="aasan2">
            <div class="aasan2-content">
            <p>VIPARITA KARANI</p>
            <ol>
                <li>Lie down and rest your legs against a wall.</li>
                <li>Keep arms relaxed, palms facing up
                </li>
                <li>Breathe naturally and feel the tension release.</li>
            </ol>
        </div>
        <img src="../assets/img/vkariniasana.png" alt="">
    </div>
    <div class="aasan1">
        <img src="../assets/img/balasana.png" alt="">
        <div class="aasan3-content">
        <p>BALASANA</p>
        <ol>
            <li>Sit on your heels and extend arms forward.
            </li>
            <li>Rest your forehead on the mat.

            </li>
            <li>Breathe naturally and feel the tension release.
            </li>
        </ol>
    </div>
</div>
<div class="aasan2">
    <div class="aasan2-content">
    <p>SUKHASANA</p>
    <ol>
        <li>Sit cross-legged and close your eyes.
        </li>
        <li>Take slow, deep breaths
        </li>
        <li>Focus on grounding yourself in the present.
        </li>
    </ol>
</div>
<img src="../assets/img/sukhasana.png" alt="">
</div>
        </div>
    <div id="footer-container"></div>
    <script>
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

