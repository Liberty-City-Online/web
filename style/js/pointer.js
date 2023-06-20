function playSound(soundFile) {
  var audio = new Audio(soundFile);
  audio.play();
}

function addClickListenerToAllElements() {
  var elements = document.getElementsByTagName("*");
  for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener("click", function() {
      playSound("/sound/click.mp3");
    });
  }
}

addClickListenerToAllElements();