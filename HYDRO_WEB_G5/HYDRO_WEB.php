<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Basic favicon -->
<link rel="icon" type="image/png" href="hydroICON.png">

  <title>BSHS</title>
  <style>
    * {
      margin: 0;
      padding: 0 'Poppins';
      box-sizing: border-box;
      font-family: 'Times New Roman';
    }
    html {
      scroll-behavior: smooth;
    }

    body {
      background-color: #f0f4f8;
      color: #333;
    }

    header {
      background: linear-gradient(to right, #00b4db, #0083b0);
      padding: 20px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    header h1 {
      color: #fff;
      font-size: 28px;
      font-weight: 800;
    }

    nav a {
      color: #fff;
      margin-left: 25px;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    nav a:hover {
      color: #ffe600;
      transform: scale(1.1);
    }

    nav a:active {
      animation: clickEffect 0.4s ease;
    }

    @keyframes clickEffect {
      0% { transform: scale(1); }
      50% { transform: scale(0.9); }
      100% { transform: scale(1); }
    }

    .hero {
      width: 100%;
      height: 90vh;
      background: url('Hydroponics-system.jpg') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .hero div {
      color: rgb(255, 255, 255);
      font-size: 5.5rem;
      font-weight: 800;
      z-index: 2;
      text-align: center;
      animation: fadeInZoom 2s ease-out;
      text-shadow: 0 0 10px skyblue, 0 0 20px skyblue, 0 0 30px skyblue;
    }

    @keyframes fadeInZoom {
      0% {
        opacity: 0;
        transform: scale(0.8);
      }
      100% {
        opacity: 1;
        transform: scale(1);
      }
    }

    .info-section, .components-section {
      padding: 60px 50px;
      text-align: center;
    }

    .info-section h2, .components-section h2 {
      font-size: 36px;
      margin-bottom: 20px;
      color: #0083b0;
    }

    .info-section p {
      font-size: 18px;
      line-height: 1.6;
      max-width: 800px;
      margin: 0 auto;
      text-align: justify;
    }

    .cards {
      display: flex;
      justify-content: space-around;
      padding: 40px 50px;
      gap: 30px;
      flex-wrap: wrap;
    }

    .card {
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 300px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
    }

    .card-content h3 {
      margin-bottom: 10px;
      color: #00b4db;
      font-weight: 600;
    }

    .card-content p {
      font-size: 15px;
      line-height: 1.4;
    }

    .back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #00b4db;
      color: white;
      border: none;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      font-size: 24px;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      transition: background-color 0.3s, transform 0.3s;
    }

    .back-to-top:hover {
      background-color: #0083b0;
      transform: scale(1.1);
    }

    @media (max-width: 900px) {
      .cards {
        flex-direction: column;
        align-items: center;
      }

      .hero div {
        font-size: 2.5rem;
        padding: 0 20px;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>SUSTAINABLE FUTURE STARTS HERE!</h1>
    <nav>
      <a href="#">Home</a>
      <a href="#info">Information</a>
      <a href="#components">Components</a>
      <a href="#diagram">Diagram</a>

    
    </nav>
  </header>

  <section class="hero">
    <div>BRO'S SOLAR <br> HYDROPONIC SYSTEM</div>
  </section>

  <section class="info-section" id="info">
     <h2>Introduction</h2> <br>
      <p>
     The integration of solar energy with hydroponic farming has emerged as a groundbreaking solution to address several key challenges such as high energy costs, water scarcity, lack of monitoring, farming in remote locations, and sustainable food production, especially in urban areas and regions with limited access to farmland. Hydroponics, the practice of growing plants in a water-based, nutrient-rich solution instead of soil, has gained significant attention for its water efficiency and ability to produce food in environments where traditional agriculture is not feasible. By combining hydroponics with solar energy, this system offers a sustainable method to support food security while minimizing environmental impact.
    </p>
    <br>
    <br>
    <br>
    <h2>What is Solar Hydroponics?</h2> <br>
    <p>
      Solar hydroponic systems combine the power of renewable solar energy with soilless farming. This innovative approach allows for efficient, eco-friendly, and high-yield crop production, ideal for urban and rural environments alike.
    </p>
  </section>

  <section class="cards">
    <div class="card">
      <img src="solar-panel-cooler.webp" alt="Solar Panel">
      <div class="card-content">
        <h3>Solar Energy</h3>
        <p>Harness the sun's power to run hydroponic systems, reducing energy costs and carbon footprint.</p>
      </div>
    </div>
    <div class="card">
      <img src="farming.jpg" alt="Hydroponic Farming">
      <div class="card-content">
        <h3>Hydroponic Farming</h3>
        <p>Grow crops faster and more efficiently without soil, using nutrient-rich water systems.</p>
      </div>
    </div>
    <div class="card">
      <img src="hydroponic-greenhouse.jpg" alt="Greenhouse">
      <div class="card-content">
        <h3>Smart Greenhouse</h3>
        <p>Automated systems monitor and adjust conditions to maximize plant growth and sustainability.</p>
      </div>
    </div>
  </section>

  <section class="components-section" id="components">
    <h2>System Components</h2>
    <div class="cards">
      <div class="card">
        <img src="solarpanel.webp" alt="Solar Panel">
        <div class="card-content">
          <h3>Solar Panels</h3>
          <p>Capture solar energy efficiently to power the entire hydroponic setup sustainably.</p>
        </div>
      </div>
      <div class="card">
        <img src="pump.jpg" alt="Water Pump">
        <div class="card-content">
          <h3>Water Pump</h3>
          <p>Ensures continuous nutrient flow to the plants in the hydroponic system.</p>
        </div>
      </div>
      <div class="card">
        <img src="dht11.jpg" alt="DHT">
        <div class="card-content">
          <h3>DHT11</h3>
          <p>Detect temperature and humidity.</p>
        </div>
      </div>
      <div class="card">
        <img src="ultrasonic.webp" alt="SonicSensor">
        <div class="card-content">
          <h3>Ultrasonic Sensor</h3>
          <p>Detect the water level.</p>
        </div>
      </div>
      <div class="card">
        <img src="solar charger.png" alt="Charger">
        <div class="card-content">
          <h3>Solar Charger</h3>
          <p>Solar energy is converted into electricity using solar cells (energy packets).</p>
        </div>
      </div>
      <div class="card">
        <img src="ph.jpg" alt="pH">
        <div class="card-content">
          <h3>pH Sensor</h3>
          <p>Detect the pH level in the water.</p>
        </div>
      </div>
      <div class="card">
        <img src="Node-MCU-Devkit-1-0.jpg" alt="ESP">
        <div class="card-content">
          <h3>Node MCU</h3>
          <p>Acts as the brain of the system, connecting sensors (for temperature, pH, humidity, etc.) and sending data to the cloud or mobile app. It can also automate processes like turning on water pumps.</p>
        </div>
      </div>
      <div class="card">
        <img src="battery.webp" alt="Battery">
        <div class="card-content">
          <h3>12V Battery</h3>
          <p> Powers the ESP8266 and other components like sensors and pumps. Essential for off-grid or backup operation during power outages..</p>
        </div>
      </div>
      <div class="card">
        <img src="tank.jpg" alt="Tank">
        <div class="card-content">
          <h3>Nutrient tank</h3>
          <p>Delivers the nutrient solution to plant roots through the hydroponic system (e.g., NFT, DWC). Ensures plants get minerals like nitrogen, phosphorus, and potassium without soil.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="diagram-section" id="diagram" style="padding: 60px 50px; text-align:center; background:#e0f7fa;">
  <h2 style="font-size:36px; margin-bottom:20px; color:#006064;">System Diagram</h2>
  <img src="circuit_image (2).png" alt="Solar Hydroponic System Diagram" style="max-width:90%; height:auto; border-radius:10px; box-shadow:0 10px 20px rgba(0,0,0,0.2);">
  <h3><p style="font-size:18px; margin-top:20px; max-width:800px; margin-left:auto; margin-right:auto; color:#333;">
    This diagram illustrates the integration of solar panels, sensors and other components for Solar Hydroponic System.
  </p></h3>
</section>

 <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .footer {
      background-color: #222;
      padding: 30px 0;
      color: #fff;
      text-align: center;
    }

    .footer-content {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
    }

    .profile {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .logo-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #fff;
      margin-bottom: 10px;
    }

    .profile p {
      margin: 0;
      font-size: 16px;
    }
  </style>
</head>
<body>

  <!-- Footer Section -->

   <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .footer {
      background-color: #222;
      padding: 30px 40px;
      color: #fff;
      display: flex;
      flex-direction: column;
    }

    .footer-header {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .footer-content {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
    }

    .profile {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .logo-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #fff;
      margin-bottom: 10px;
    }

    .profile-name {
      margin: 0;
      font-size: 16px;
    }

    @media (max-width: 600px) {
      .footer {
        align-items: center;
      }

      .footer-header {
        align-self: flex-start;
      }
    }
  </style>
</head>
<body>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-header">Developer: </div>
    <div class="footer-content">
      <div class="profile">
        <img src="1693783545460.jpg" alt="herlo" class="logo-img" />
        <p class="profile-name">Herlo Visca</p>
      </div>
      <div class="profile">
        <img src="494820309_1005080188377647_7093985574044573572_n.jpg" alt="karen" class="logo-img" />
        <p class="profile-name">Karen Joy Tandoy</p>
      </div>
      <div class="profile">
        <img src="e354c737-b19a-4fc8-8689-ebac1bee4c94.jpeg" alt="jb" class="logo-img" />
        <p class="profile-name">Jayboy Castillanes</p>
      </div>
    </div>
  </footer>


  <button class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">↑</button>
</body>
</html>
