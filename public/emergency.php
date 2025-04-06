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
    <div class="emergency-toolkit">
      <h1>Emergency Toolkit</h1>
      <p class="pp">TRY THESE HELPFUL TIPS TILL HELP REACHES YOU!</p>
      <div class="line"></div>
      <div class="emergency-div">
        <div class="div1">
          <img src="../assets/img/groundicon.png" alt="" />
          <div class="div1content">
            <p><strong>5-4-3-2-1 BREATHING TECHNIQUE </strong><br /></p>
            <ol>
              <li>Look around & name 5 things you can see.</li>
              <li>
                Focus on textures around you & name 4 things you can touch.
              </li>
              <li>Listen for subtle sounds & name 3 things you can hear.</li>
              <li>
                Notice the scents around you & name 2 things you can smell.
              </li>
              <li>
                Take a sip of water, or chew gum to focus on 1 taste in your
                mouth.
              </li>
            </ol>
            <p class="p2">
              SHIFT FOCUS FROM ANXIOUS THOUGHTS TO PRESENT REALITY
            </p>
          </div>
        </div>
        <div class="div2">
          <img src="../assets/img/boxicon.png" alt="" />
          <div class="div2content">
            <p><strong>BOX BREATHING TECHNIQUE </strong><br /></p>
            <ol>
              <li>Inhale deeply through your nose for 4 seconds.</li>
              <li>
                Hold your breath for 4 seconds
              </li>
              <li>Exhale slowly through your mouth for 4 seconds.
            </li>
              <li>
                Hold again for 4 seconds before repeating.
              </li>
            </ol>
            <p class="p2">
                SLOW YOUR HEART RATE, REDUCE STRESS, AND PROMOTE RELAXATION
            </p>
          </div>
          </div>
          <div class="div3">
            <img src="../assets/img/callicon.png" alt="" />
            <div class="div3content">
              <p><strong>HELPLINES IN INDIA FOR EMOTIONAL CRISIS SUPPORT</strong><br /></p>
              <ol>
                <li>Vandrevala Foundation Helpline ☎ 1860 266 2345</li>
                <li>
                    Snehi Mental Health Support ☎ +91-9582208181

                </li>
                <li>iCall for Mental Health Support ☎ +91-9152987821
              </li>
                <li>
                    Fortis Stress Helpline ☎ +91-8376804102
                </li>
                <li>Samaritans Mumbai ☎ +91-8422984528</li>
              </ol>
              <p class="p2">
                GET IMMEDIATE EMOTIONAL SUPPORT AND PROFESSIONAL GUIDANCE
              </p>
            </div>
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
