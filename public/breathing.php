<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breathing Game</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color:  white;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            border: 4px solid #394B7E;
            border-radius: 2px;
            height: 400px;
            width: 400px;
        }
        h1{
            margin-bottom: 5px;
        }
        .bubble {
            width: 100px;
            height: 100px;
            background-color: #516cb3;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            transition: width 4s ease-in-out, height 4s ease-in-out;
            position: relative;
            text-transform: uppercase;
        }
        .controls {
            margin-top: 20px;
            text-align: center;
        }
        button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border: 1px solid white;
            border-radius: 2px;
            background-color: #516cb3;
            color: white;
            text-transform: uppercase;
        }
        button:hover {
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
    </style>
</head>
<body>
    <h1 style="font-family: 'Times New Roman', Times, serif; color: #394B7E;">BREATHING GAME</h1>
    <p>Controlled breathing regulates the nervous system, reducing heart rate and promoting a sense of calm.</p>
    <div class="container">
        <div class="bubble" id="bubble"></div>
    </div>
    <div class="controls">
        <button onclick="startBreathing()">Start</button>
        <button onclick="stopBreathing()">Stop</button>
    </div>

    <script>
        let breathing;
        let timeouts = []; 

        function startBreathing() {
            stopBreathing();
            let bubble = document.getElementById("bubble");
            
            function breatheIn() {
                bubble.style.width = "300px";
                bubble.style.height = "300px";
                bubble.textContent = "In";
                timeouts.push(setTimeout(breatheHold, 4000));
            }

            function breatheHold() {
                bubble.textContent = "Hold";
                timeouts.push(setTimeout(breatheOut, 2000));
            }

            function breatheOut() {
                bubble.style.width = "100px";
                bubble.style.height = "100px";
                bubble.textContent = "Out";
                timeouts.push(setTimeout(breatheIn, 4000));
            }
            

            breatheIn();
            breathing = setInterval(breatheIn, 10000);
        }

        function stopBreathing() {
            clearInterval(breathing); 
            breathing = null;
            timeouts.forEach(clearTimeout);
            timeouts = [];
            let bubble = document.getElementById('bubble');
            bubble.textContent = '';
            bubble.style.width = '100px';
            bubble.style.height = '100px';
        }
    </script>
</body>
</html>