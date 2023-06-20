<!DOCTYPE html>
<html>
<head>
  <title>LCO - Soon</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      overflow: hidden;
    }

    .container {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: black;
      position: absolute;
      z-index: 9999;
    }

    #logo {
      width: 400px;
      height: 400px;
      animation: logo-animation 25s linear forwards;
    }

    .backgrounds {
      width: 100%;
      height: 100%;
      overflow: hidden;
      position: absolute;
      z-index: -1;
    }

    .bg-1 {
      background-image: url("style/background-images/1.png");
      background-position: center;
      background-size: cover;
      width: 100%;
      height: 100%;
      position: absolute;
      animation: bg-animation 18s linear infinite;
      animation-delay: 3s;
    }

    .bg-2 {
      background-image: url("style/background-images/2.jpg");
      background-position: center;
      background-size: cover;
      width: 100%;
      height: 100%;
      position: absolute;
      animation: bg-animation 18s linear infinite;
      animation-delay: 3s;
    }

    @keyframes logo-animation {
      0% {
        transform: scale(1);
        opacity: 1;
      }

      90% {
        transform: scale(0.1);
        opacity: 1;
      }

      100% {
        transform: scale(0.1);
        opacity: 0;
      }
    }

    @keyframes bg-animation {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.5);
      }

      100% {
        transform: scale(1);
      }
    }

    .fade {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: black;
      animation: fade-animation 3s linear forwards;
      z-index: 9998;
    }

    @keyframes fade-animation {
      0% {
        opacity: 1;
      }

      100% {
        opacity: 0;
      }
    }

  #bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }

  .bg-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: black;
    transition: opacity 3s ease-in-out;
    animation: bg-animation 18s linear infinite;
    z-index: -1;
  }

  .bg-team {
    width: 85vw;
    animation: bg-team 18s linear infinite;
  }


@keyframes bg-team {
  0% {
    transform: scale(1);
  }

  50% {
    transform: scale(0.80);
  }

  100% {
    transform: scale(1);
  }
}


  .bg-img:first-child {
    opacity: 1;
    z-index: 0;
  }
  </style>



    <audio id="player" preload="auto" autoplay loop>
            <source src="style/background-images/gta4.mp3" type="audio/mp3">
    </audio>

  <div class="container">
    <img id="logo" src="style/background-images/logo.png">
  </div>

<img class="bg-team" src="style/background-images/team.png">

<div id="bg">
  <img src="style/background-images/1.png" alt="background" class="bg-img">
  <img src="style/background-images/2.jpg" alt="background" class="bg-img">
  <img src="style/background-images/3.jpg" alt="background" class="bg-img">
</div>

<script>
  setTimeout(function() {
  var container = document.querySelector(".container");
  container.parentNode.removeChild(container);

  var fade = document.createElement('div');
  fade.className = 'fade';
  document.body.appendChild(fade);

  setTimeout(function() {
    fade.style.display = 'none';
  }, 3000);

}, 13000);

  var images = document.querySelectorAll('#bg .bg-img');
  var index = 0;
  setInterval(function() {
    images[index].style.opacity = 0;
    index = (index + 1) % images.length;
    images[index].style.opacity = 1;
  }, 10000);
</script>

</body>
</html> 