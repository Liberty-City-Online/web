<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/css/custom-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GTAIV - Index</title>
</head>
<body>

<div class="bg-drag">
<div class="selection-box">
</div>
</div>
<div id="popup-container">
  <p id="popup-text">To logout of the computer click on the "LOGOUT" icon on the desktop.</p>
</div>
<div class="web-icon-container">
  <img src="style/image/web.png" alt="icon" onclick="window.location.href='web'">
</div>

<div class="logout-icon-container">
  <a href="#" onclick="var audio = new Audio('./style/sound/closed.mp3'); audio.play(); setTimeout(function(){ window.location.href='closed'; }, 2000);"> <img src="style/image/logout.png" alt="icon"> </a>
</div>

</body>

<script>
let isDragging = false;
let startPoint = {};
let endPoint = {};

const selectionBox = document.querySelector(".selection-box");
const container = document.querySelector(".bg-drag");

document.addEventListener("mousedown", (event) => {
  if (event.button !== 0) return;

  isDragging = true;
  startPoint.x = event.clientX - container.getBoundingClientRect().left;
  startPoint.y = event.clientY - container.getBoundingClientRect().top;

  selectionBox.style.left = startPoint.x + "px";
  selectionBox.style.top = startPoint.y + "px";
  selectionBox.style.width = "0";
  selectionBox.style.height = "0";
  selectionBox.style.display = "block";
});

document.addEventListener("mousemove", (event) => {
  if (!isDragging) return;

  endPoint.x = event.clientX - container.getBoundingClientRect().left;
  endPoint.y = event.clientY - container.getBoundingClientRect().top;

  const width = Math.abs(endPoint.x - startPoint.x);
  const height = Math.abs(endPoint.y - startPoint.y);
  const left = Math.min(startPoint.x, endPoint.x);
  const top = Math.min(startPoint.y, endPoint.y);

  selectionBox.style.width = width + "px";
  selectionBox.style.height = height + "px";
  selectionBox.style.left = left + "px";
  selectionBox.style.top = top + "px";
});

document.addEventListener("mouseup", (event) => {
  if (event.button !== 0) return;

  isDragging = false;
  selectionBox.style.display = "none";
});
</script>


</html>
