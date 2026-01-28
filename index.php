<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Onboarding Profile Card</title>

  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f2f4f8;
      font-family: Arial, sans-serif;
    }

    .card {
      background-color: #ffffff;
      width: 350px;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      text-align: center;
    }

    h1 {
      margin-bottom: 10px;
    }

    .name {
        font-weight: bold;
    }
    .bio {
      font-size: 14px;
      color: #555;
      margin-bottom: 20px;
    }

    .skill ul {
      list-style: none;
      padding: 0;
      margin-bottom: 20px;
    }

    .skill ul li {
      background: #eef1f6;
      margin: 5px 0;
      padding: 8px;
      border-radius: 6px;
      font-size: 14px;
    }

    button {
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      background-color: #0050fd;
      color: white;
      font-size: 14px;
      cursor: pointer;
      margin-bottom: 20px;
    }

    button:hover {
      background-color: #1e3685;
    }

    .system-info {
      border-top: 1px solid #ddd;
      padding-top: 15px;
      font-size: 13px;
      color: #444;
    }
  </style>
</head>

<body>

  <div class="card">

    <h1>Junior Software Engineer</h1>

    <p class= "name">Francis Alkier M. Ubalde
    </p>

    <p class="bio">"Aspiring to IT professional someday so i ready to learn PHP and MySQL this semester."
    </p>

    <div class= "skill">
        <h3>My Current Tech Skills</h3>
        <ul>
            <li>Basics HTML & CSS</li>
            <li>BasicsJavaScript</li>
            <li>Basic MySQL</li>
        </ul>
    </div>

    <button id="initBtn">Initialize System</button>

    <div class="system-info">
      <h3>Server Information</h3>
      <p><strong>Date & Time:</strong> <?php echo date('F j, Y, g:i a'); ?></p>
      <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
    </div>

  </div>

  <script>
    const button = document.getElementById("initBtn");

    button.addEventListener("click", function () {
      alert("Welcome to the team! System initialized successfully.");
    });
  </script>

</body>
</html>
