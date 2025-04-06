<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sound Board Game</title>
  <style>
    body {
      text-align: center;
      font-family: Arial, sans-serif;
      background-color: white;
      margin: 0;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    h1 {
      margin-bottom: 5px;
      font-family: 'Times New Roman', Times, serif;
      color: #394B7E;
    }
    .sound-board {
      width: 600px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 30px;
      margin: 20px 0;
      border: 4px solid #394B7E;
      border-radius: 5px;
    }
    .tile {
      width: 100px;
      height: 100px;
      background-color: #516cb3;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 22px;
      font-weight: bold;
      color: white;
      cursor: pointer;
      transition: background 0.3s;
    }
    .tile:hover {
      background-color: white;
      border: 1px solid #394B7E;
      color: #394B7E;
    }
    .stop-button {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 18px;
      border: 1px solid white;
      cursor: pointer;
      background-color: #516cb3;
      color: white;
      border-radius: 2px;
      transition: background 0.3s;
      text-transform: uppercase;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .stop-button:hover {
      background-color: white;
      border: 1px solid #394B7E;
      color: #394B7E;
    }
    p {
      font-size: 16px;
      text-transform: lowercase;
      color: #394B7E;
      margin-bottom: 20px;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    /* Floating ad on the right side */
    .sidebar-ad {
      position: absolute;
      bottom: 1%;
      right: 10%;
      margin-left: 20px;
      width: 200px;
      height: 600px;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      z-index: 999;
    }
    .sidebar-ad img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>SOUND BOARD GAME</h1>
  <p>The resonating frequencies of Tibetan bowls stimulate the parasympathetic nervous system, reducing stress and anxiety.</p>
  <div class="sound-board">
    <div class="tile" onclick="playSound(0)">1</div>
    <div class="tile" onclick="playSound(1)">2</div>
    <div class="tile" onclick="playSound(2)">3</div>
    <div class="tile" onclick="playSound(3)">4</div>
  </div>
  <button class="stop-button" onclick="stopSound()">Stop</button>

  <!-- Floating Ad -->
  <div class="sidebar-ad">
    <a id="adLink" href="https://google.com" target="_blank">
      <img id="adImage" src="gucciad.jpg" alt="Ad">
    </a>
  </div>

  <script>
    let currentSound = null;

    const sounds = [
      new Audio('../assets/audio/soundboard1.mp3'),
      new Audio('../assets/audio/soundboard2.mp3'),
      new Audio('../assets/audio/soundboard3.mp3'),
      new Audio('../assets/audio/soundboard4.mp3')
    ];

    function playSound(index) {
      if (currentSound) {
        currentSound.pause();
        currentSound.currentTime = 0;
      }
      currentSound = sounds[index];
      currentSound.play();
    }

    function stopSound() {
      if (currentSound) {
        currentSound.pause();
        currentSound.currentTime = 0;
        currentSound = null;
      }
    }

    // Ad rotation logic
    let adIndex = 0;
    const ads = [
      { src: '../assets/img/gucciad.jpg', link: "https://www.google.com/search?q=gucci+ads" },
      { src: '../assets/img/laysad.jpg', link: "https://www.google.com/search?q=lays+chips+ads" },
      { src: '../assets/img/slicead.jpg', link: "https://www.google.com/search?q=slice+juice" }
    ];

    function rotateAds() {
      const adImage = document.getElementById("adImage");
      const adLink = document.getElementById("adLink");
      adIndex = (adIndex + 1) % ads.length;
      adImage.src = ads[adIndex].img;
      adLink.href = ads[adIndex].link;
    }

    setInterval(rotateAds, 10000);
  </script>
</body>
</html>