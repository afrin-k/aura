<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Pop Game</title>
    <style>
        body {
            margin: 0;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        #controls {
            margin-bottom: 10px;
        }
        p{
            font-size: 16px;
            text-transform: lowercase;
            color: #394B7E;
            margin-bottom: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        h1{
            font-family: 'Times New Roman', Times, serif;
            color: #394B7E;
            margin-bottom: 5px;
        }
        #game-container {
            position: relative;
            width: 70vw;
            height: 70vh;
            overflow: hidden;
            background-color: #516cb3;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .bubble {
            position: absolute;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.9) 30%, rgba(173, 216, 230, 0.5) 80%);
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(0, 0, 255, 0.4);
            border: 2px solid rgba(255, 255, 255, 0.8);
            animation: float 10s linear forwards;
        }
        @keyframes float {
            from {
                transform: translateY(100%);
            }
            to {
                transform: translateY(-100vh);
            }
        }
        button {
            text-transform: uppercase;
            margin: 10px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border: 1px solid white;
            border-radius: 2px;
            background-color: #516cb3;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        button:hover {
            background-color: white;
            color: #394B7E;
            border: 1px solid #394B7E;
        }
    </style>
</head>
<body>
    <h1>BUBBLE POP GAME</h1>
    <p>Engaging in repetitive popping motions triggers dopamine release, promoting relaxation and focus.</p>
    
    <div id="controls">
        <button onclick="startGame()">Start</button>
        <button onclick="stopGame()">Stop</button>
    </div>
    <div id="game-container"></div>
    <audio id="pop-sound" src="C:.mp3"></audio>
    <script>
        let gameRunning = false;
        function startGame() {
            gameRunning = true;
            generateBubbles();
        }
        function stopGame() {
            gameRunning = false;
            document.getElementById('game-container').innerHTML = '';
        }
        function generateBubbles() {
            if (!gameRunning) return;
            const bubble = document.createElement('div');
            bubble.classList.add('bubble');
            const container = document.getElementById('game-container');
            bubble.style.left = Math.random() * (container.clientWidth - 100) + 'px';
            bubble.style.bottom = '-100px';
            container.appendChild(bubble);
            bubble.style.animation = `float ${Math.random() * 10 + 10}s linear forwards`;
            bubble.addEventListener('click', () => {
                bubble.style.animation = 'none';
                bubble.style.opacity = '0';
                const sound = document.getElementById('pop-sound');
                sound.currentTime = 0;
                sound.play();
                setTimeout(() => bubble.remove(), 300);
            });
            setTimeout(() => {
                if (gameRunning) generateBubbles();
            }, 2000);
        }
    </script>
</body>
</html>
