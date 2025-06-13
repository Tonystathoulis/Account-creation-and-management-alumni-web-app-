<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 20%;
        }

        .navigation {
            overflow: hidden;
            background-color: rgb(179, 0, 0);
            position: fixed;
            top: 0;
            width: 100%;
        }

        .footer {
          position: relative;
          width: 100%;
          background: #3586ff;
          min-height: 100px;
          padding: 20px 50px;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
        }

        .social-icon,
        .menu {
          position: relative;
          display: flex;
          justify-content: center;
          align-items: center;
          margin: 10px 0;
          flex-wrap: wrap;
        }

        .social-iconitem,
        .menuitem {
          list-style: none;
        }

        .social-iconlink {
          font-size: 2rem;
          color: #fff;
          margin: 0 10px;
          display: inline-block;
          transition: 0.5s;
        }
        .social-iconlink:hover {
          transform: translateY(-10px);
        }

        .menulink {
          font-size: 1.2rem;
          color: #fff;
          margin: 0 10px;
          display: inline-block;
          transition: 0.5s;
          text-decoration: none;
          opacity: 0.75;
          font-weight: 300;
        }

        .menulink:hover {
          opacity: 1;
        }

        .footer p {
          color: #fff;
          margin: 15px 0 10px 0;
          font-size: 1rem;
          font-weight: 300;
        }

        .wave {
          position: absolute;
          top: -100px;
          left: 0;
          width: 100%;
          height: 100px;
          background: url("https://i.ibb.co/wQZVxxk/wave.png");
          background-size: 1000px 100px;
        }

        .wave#wave1 {
          z-index: 1000;
          opacity: 1;
          bottom: 0;
          animation: animateWaves 4s linear infinite;
        }

        .wave#wave2 {
          z-index: 999;
          opacity: 0.5;
          bottom: 10px;
          animation: animate 4s linear infinite !important;
        }

        .wave#wave3 {
          z-index: 1000;
          opacity: 0.2;
          bottom: 15px;
          animation: animateWaves 3s linear infinite;
        }

        .wave#wave4 {
          z-index: 999;
          opacity: 0.7;
          bottom: 20px;
          animation: animate 3s linear infinite;
        }

        @keyframes animateWaves {
          0% {
            background-position-x: 1000px;
          }
          100% {
            background-positon-x: 0px;
          }
        }

        .comic-button {
          display: inline-block;
          padding: 10px 20px;
          font-size: 24px;
          font-weight: bold;
          text-align: center;
          text-decoration: none;
          color: #fff;
          background-color: #ff5252;
          border: 2px solid #000;
          border-radius: 10px;
          box-shadow: 5px 5px 0px #000;
          transition: all 0.3s ease;
          cursor: pointer;
        }

        .comic-button:hover {
          background-color: #fff;
          color: #ff5252;
          border: 2px solid #ff5252;
          box-shadow: 5px 5px 0px #ff5252;
        }

        .comic-button:active {
          background-color: #fcf414;
          box-shadow: none;
          transform: translateY(4px);
        }

        .right {
            padding-left: 500px;
            margin-right: 500px;
            height: 10px;
            position: center;
        }

        /* Background image styles */
        body {
          background-image: url('alumni_pic.jpg');
          background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;
        }
    </style>
</head>
<body>
<div class="navigation">
 <img src="logo.png" alt="Alumni Logo" class="center">
</div>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="text-center">
        <h1> Mediterranean College </h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2>Welcome to Alumni! 🎓</h2>
        <a href="login.php">
            <button class="comic-button">Join Now!</button>
        </a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <p class="right">Alumni Club
The Alumni Club of Mediterranean College was founded in 1981, it counts more than 17,000 members as of today, and is the largest club among private institutions in Greece. The Club's goal is to boost social and professional links between the College and its alumni, in order to promote mutual interests.
The Alumni Club aims to:
Act as a “liaison” between the College and its graduates.
Maintain alumni communication & collaboration.
Support graduates in the wider social & professional arena.
Promote ethical, social & professional mutual support of its members.
 The Alumni Club is administered by a Board of Directors, which is elected every four years and is coordinated by the Alumni Office.</p>
    </div>
</div>
<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-iconitem"><a class="social-iconlink" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-iconitem"><a class="social-iconlink" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-iconitem"><a class="social-iconlink" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-iconitem"><a class="social-iconlink" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menuitem"><a class="menulink" href="#">Home</a></li>
      <li class="menuitem"><a class="menulink" href="#">About</a></li>
      <li class="menuitem"><a class="menulink" href="#">Services</a></li>
      <li class="menuitem"><a class="menulink" href="#">Team</a></li>
      <li class="menuitem"><a class="menulink" href="#">Contact</a></li>
    </ul>
    <p>&copy;2024 Mediterranean College | Alumni Club | All Rights Reserved</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
