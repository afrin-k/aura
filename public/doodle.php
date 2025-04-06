<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doodle Game</title>
  <style>
    body {
      text-align: center;
            font-family: Arial, sans-serif;
            background-color: whitesmoke;

    }

    h1 {
      margin-bottom: 5px;
            font-family: 'Times New Roman', Times, serif;
            color: #394B7E;

    }

    p {
      font-size: 16px;
            text-transform: lowercase;
            color: #394B7E;
            margin-bottom: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }

    .toolbar {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 10px;
      gap: 10px;
      border: 2px solid #3e4c7e;
      padding: 10px;
      background-color: white;
      width: fit-content;
      margin-left: auto;
      margin-right: auto;
      border-radius: 6px;
    }

    .color {
      width: 30px;
      height: 30px;
      cursor: pointer;
      border: 1px solid #999;
    }

    #eraser {
      padding: 8px 16px;
      background-color: #3e4c7e;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }

    #canvas {
      border: 2px solid #3e4c7e;
      background-color: white;
      cursor: crosshair;
    }

    #reset {
      margin-top: 15px;
      padding: 10px 20px;
      background-color: #3e4c7e;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }

    /* Sidebar Ads */
    #ad-sidebar {
      position: absolute;
      bottom: 1%;
      right: 0;
      transform: translateY(-50%);
      padding: 8px;
      z-index: 9999;
      width: 300px;
      height: 300px;
    }

    #ad-sidebar img {
      width: 150px;
      height: 100%;
      display: block;
    }
  </style>
</head>
<body>

  <h1>DOODLE GAME</h1>
  <p>drawing activates the brain’s reward pathways, lowering cortisol levels and enhancing mindfulness.</p>

  <div class="toolbar">
    <div class="color" style="background-color: #d59ad2;"></div>
    <div class="color" style="background-color: #666;"></div>
    <div class="color" style="background-color: #222;"></div>
    <button id="eraser">ERASER</button>
  </div>

  <canvas id="canvas" width="800" height="400"></canvas><br>
  <button id="reset">RESET</button>

  <!-- Sidebar Ad -->
  <div id="ad-sidebar">
    <a href="https://example.com" target="_blank">
      <img id="rotating-ad" src="ad1.jpg" alt="Ad" />
    </a>
  </div>

  <script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    let drawing = false;
    let currentColor = '#000000';
    const eraser = document.getElementById('eraser');

    canvas.addEventListener('mousedown', () => drawing = true);
    canvas.addEventListener('mouseup', () => drawing = false);
    canvas.addEventListener('mouseout', () => drawing = false);
    canvas.addEventListener('mousemove', draw);

    function draw(e) {
      if (!drawing) return;
      ctx.lineWidth = 4;
      ctx.lineCap = 'round';
      ctx.strokeStyle = currentColor;

      const rect = canvas.getBoundingClientRect();
      ctx.lineTo(e.clientX - rect.left, e.clientY - rect.top);
      ctx.stroke();
      ctx.beginPath();
      ctx.moveTo(e.clientX - rect.left, e.clientY - rect.top);
    }

    // Color selection
    const colors = document.querySelectorAll('.color');
    colors.forEach(color => {
      color.addEventListener('click', () => {
        currentColor = color.style.backgroundColor;
      });
    });

    // Eraser
    eraser.addEventListener('click', () => {
      currentColor = '#ffffff'; // Canvas background color
    });

    // Reset
    document.getElementById('reset').addEventListener('click', () => {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.beginPath();
    });

    // Ad Rotator
    const ads = [
      { src: "../assets/img/gucciad.jpg", link: "https://www.google.com/search?q=gucci+ads" },
      { src: "../assets/img/laysad.jpg", link: "https://www.google.com/search?q=lays+chips+ads" },
      { src: "../assets/img/slicead.jpg", link: "https://www.google.com/search?q=slice+juice" }
    ];

    let currentAdIndex = 0;
    const adImage = document.getElementById("rotating-ad");
    const adLink = adImage.parentElement;

    setInterval(() => {
      currentAdIndex = (currentAdIndex + 1) % ads.length;
      adImage.src = ads[currentAdIndex].src;
      adLink.href = ads[currentAdIndex].link;
    }, 3000);
  </script>

</body>
</html>