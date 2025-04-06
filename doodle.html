<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doodle Game</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
        }
        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 620px;
            margin: 10px auto;
            padding: 10px 0;
            border: 2px solid #394B7E;
            border-radius: 5px;
        }
        .color-tools, .eraser-tool {
            margin-left: 10px;
            display: flex;
            gap: 10px;
        }
        .color-btn {
            width: 30px;
            height: 30px;
            border: none;
            cursor: pointer;
        }
        .eraser {
            margin: 10px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border: 1px solid whitesmoke;
            border-radius: 2px;
            background-color: #516cb3;
            color: whitesmoke;
            text-transform: uppercase;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .eraser:hover{
            background-color: white;
            color: #394B7E;
            border: 1px solid #394B7E;
        }
        .container {
            display: flex;
            justify-content: center;
            position: relative;
        }
        canvas {
            border: 2px solid #394B7E;
            border-radius: 5px;
            cursor: crosshair;
            background-color: white;
        }
        .reset-tool {
            margin-top: 10px;
        }
        .reset {
            margin: 10px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border: 1px solid white;
            border-radius: 2px;
            background-color: #516cb3;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-transform: uppercase;
        }
        .reset:hover{
            background-color: white;
            color: #394B7E;
            border: 1px solid #394B7E;
        }
        p{
            font-size: 16px;
            text-transform: lowercase;
            color: #394B7E;
            margin-bottom: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        h1 {
            margin-bottom: 5px;
            font-family: 'Times New Roman', Times, serif;
            color: #394B7E;
        }
    </style>
</head>
<body>
    <h1>DOODLE GAME</h1>
    <p> Drawing activates the brain’s reward pathways, lowering cortisol levels and enhancing mindfulness.</p>
    <div class="toolbar">
        <div class="color-tools">
            <button class="color-btn" style="background-color: rgb(216, 167, 212);" onclick="changeColor('pink')"></button>
            <button class="color-btn" style="background-color: rgb(111, 110, 120);" onclick="changeColor('grey')"></button>
            <button class="color-btn" style="background-color: rgb(16, 16, 21);" onclick="changeColor('black')"></button>
        </div>
        <div class="eraser-tool">
            <button class="eraser" onclick="changeColor('white')">Eraser</button>
        </div>
    </div>
    <div class="container">
        <canvas id="doodleCanvas" width="620" height="400"></canvas>
    </div>
    <div class="reset-tool">
        <button class="reset" onclick="clearCanvas()">Reset</button>
    </div>
    <script>
        const canvas = document.getElementById("doodleCanvas");
        const ctx = canvas.getContext("2d");
        let drawing = false;
        let currentColor = "black";
        let lineWidth = 5;

        function changeColor(color) {
            currentColor = color;
            lineWidth = color === "white" ? 20 : 5; // Increase size for eraser
        }

        function startDrawing(event) {
            drawing = true;
            draw(event);
        }

        function stopDrawing() {
            drawing = false;
            ctx.beginPath();
        }

        function draw(event) {
            if (!drawing) return;
            ctx.lineWidth = lineWidth;
            ctx.lineCap = "round";
            ctx.strokeStyle = currentColor;
            
            ctx.lineTo(event.offsetX, event.offsetY);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(event.offsetX, event.offsetY);
        }

        function clearCanvas() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }

        canvas.addEventListener("mousedown", startDrawing);
        canvas.addEventListener("mouseup", stopDrawing);
        canvas.addEventListener("mousemove", draw);
    </script>
</body>
</html>
