<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/css/custom-style.css">
    <link rel="stylesheet" type="text/css" href="style/css/web.css">
    <script src="http://localhost/main/style/js/pointer.js" charset="UTF-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GTAIV - Web Page</title>
</head>
<body>
<div class="rightside"></div>
<div class="leftside"></div>
<div class="topbarpattern"></div>
<div class="pattern">


</div>
<a href="web"><div class="homebut"></div></a>
<div class="mailbut"></div>
<div class="forbutoff"></div>
<div class="backbutoff"></div>
<div class="searchbar">

  <form action="web" method="get">
    <input id="searchInput" style="font-family: DINMittelschriftStd; font-size: 24px; color: black; margin-top: -1%; margin-left: 0%; width: 715px; height: 64px; background-color: rgba(0,0,0,0); border: none; outline: none;" type="text" name="q" autocomplete="off" placeholder="Search.." value="www.lc-online.net/main/web.php">
  </form>

  <div id="videoContainer"></div>
  <div id="headerDiv"></div>
  <div id="lovemeetDiv"></div>
  <div id="yilmazDiv" style="cursor: pointer;" onclick="window.location.href = '/main/web?q=www.love-meet.net%2Fprofile.html';"></div>
  <div id="yilmazTextDiv"></div>
  <div id="projectLeader"></div>

<div id="twitter" style="height: 90%; position: fixed; top: 42.5%; left: 60%; width: 80%; margin-left: 10%; margin-right: 10%; z-index: 40;">
  <a class="twitter-timeline" data-lang="en" data-width="283" data-height="600" data-theme="light" href="https://twitter.com/lconlinenet?ref_src=twsrc%5Etfw">Tweets by lconlinenet</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>


<script>

    if (searchInput.value === 'www.lc-online.net/main/web.php') {
      var videoContainer = document.getElementById('videoContainer');
      videoContainer.innerHTML = '<br><br><div style="z-index: 15; position: relative; padding-bottom: 47.7%; height: 0; overflow: hidden;"><iframe style="position: absolute; top: 19.6%; left: 0; width: 55%; height: 53%;"src="https://www.youtube.com/embed/gUjliJwM24o?rel=0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>';

      var div = document.createElement("div");
      div.className = "lc-header";
      document.getElementById("headerDiv").appendChild(div);

      var adsdiv = document.createElement("div");
      adsdiv.className = "ads";
      document.getElementById("githubAd").appendChild(adsdiv);

      var lovemeetDiv = document.getElementById("lovemeetDiv");
      lovemeetDiv.style.display = "none";

      var yilmazDiv = document.getElementById("yilmazDiv");
      yilmazDiv.style.display = "none";
    }
</script>

<script>
    var url = window.location.search.substring(3); // 3. karakterden itibaren URL'yi al

    if (url === 'www.lc-online.net%2Fmain%2Fteam.php') {
      searchInput.value = 'www.lc-online.net/main/team.php';
      document.querySelector('.backbutoff').classList.add('backbut');

      var teamProject1 = document.createElement("div");
      teamProject1.className = "projectlead";
      document.getElementById("projectLeader").appendChild(teamProject1);

      // Seçilen elementi alın
      const button = document.querySelector('.backbutoff');

      // <a> etiketi oluşturun
      const link = document.createElement('a');

      // href özelliğini ayarlayın
      link.href = 'web';

      // Sınıfı ekle
      link.classList.add('backbut');

      // Butonun içeriğini <a> etiketi ile değiştirin
      link.innerHTML = button.innerHTML;
      button.innerHTML = '';
      button.appendChild(link);

      // Olay dinleyicisi ekle
      link.addEventListener('click', function(event) {
        event.preventDefault(); // Varsayılan tıklama davranışını engelle
        window.location.href = link.href; // Yeni adrese yönlendir
      });

      var videoContainer = document.getElementById("videoContainer");
      videoContainer.style.display = "none";

      var lovemeetDiv = document.getElementById("lovemeetDiv");
      lovemeetDiv.style.display = "none";

      var yilmazDiv = document.getElementById("yilmazDiv");
      yilmazDiv.style.display = "none";
    }
</script>

<script>
    var url = window.location.search.substring(3); // 3. karakterden itibaren URL'yi al

    if (url === 'www.love-meet.net%2Fprofiles.html') {
      searchInput.value = 'www.love-meet.net/profiles.html';
      document.querySelector('.backbutoff').classList.add('backbut');

      var lovemeetDiv = document.createElement("div");
      lovemeetDiv.className = "lovemeet-header";
      document.getElementById("lovemeetDiv").appendChild(lovemeetDiv);

      var yilmazDiv = document.createElement("div");
      yilmazDiv.className = "yilmaz";
      document.getElementById("yilmazDiv").appendChild(yilmazDiv);

            // Seçilen elementi alın
      const button = document.querySelector('.backbutoff');

      // <a> etiketi oluşturun
      const link = document.createElement('a');

      // href özelliğini ayarlayın
      link.href = 'web';

      // Sınıfı ekle
      link.classList.add('backbut');

      // Butonun içeriğini <a> etiketi ile değiştirin
      link.innerHTML = button.innerHTML;
      button.innerHTML = '';
      button.appendChild(link);

      // Olay dinleyicisi ekle
      link.addEventListener('click', function(event) {
        event.preventDefault(); // Varsayılan tıklama davranışını engelle
        window.location.href = link.href; // Yeni adrese yönlendir
      });

      var videoContainer = document.getElementById("videoContainer");
      videoContainer.style.display = "none";

      var headerDiv = document.getElementById("headerDiv");
      headerDiv.style.display = "none";

      var adsdiv = document.getElementById("githubAd");
      adsdiv.style.display = "none";

      var teamProject1 = document.getElementById("projectLeader");
      teamProject1.style.display = "none";
    }
  </script>

<script>
    var url = window.location.search.substring(3); // 3. karakterden itibaren URL'yi al

    if (url === 'www.love-meet.net%2Fprofile.html') {
      searchInput.value = 'www.love-meet.net/profile.html';
      document.querySelector('.backbutoff').classList.add('backbut');

      var lovemeetDiv = document.createElement("div");
      lovemeetDiv.className = "lovemeet-header";
      document.getElementById("lovemeetDiv").appendChild(lovemeetDiv);

      var yilmazTextDiv = document.createElement("div");
      yilmazTextDiv.className = "yilmaz-text";
      document.getElementById("yilmazTextDiv").appendChild(yilmazTextDiv);

            // Seçilen elementi alın
      const button = document.querySelector('.backbutoff');

      // <a> etiketi oluşturun
      const link = document.createElement('a');

      // href özelliğini ayarlayın
      link.href = '/main/web?q=www.love-meet.net%2Fprofiles.html';

      // Sınıfı ekle
      link.classList.add('backbut');

      // Butonun içeriğini <a> etiketi ile değiştirin
      link.innerHTML = button.innerHTML;
      button.innerHTML = '';
      button.appendChild(link);

      // Olay dinleyicisi ekle
      link.addEventListener('click', function(event) {
        event.preventDefault(); // Varsayılan tıklama davranışını engelle
        window.location.href = link.href; // Yeni adrese yönlendir
      });

      var videoContainer = document.getElementById("videoContainer");
      videoContainer.style.display = "none";

      var headerDiv = document.getElementById("headerDiv");
      headerDiv.style.display = "none";

      var adsdiv = document.getElementById("githubAd");
      adsdiv.style.display = "none";

      var teamProject1 = document.getElementById("projectLeader");
      teamProject1.style.display = "none";

      var yilmazDiv = document.getElementById("yilmazDiv");
      yilmazDiv.style.display = "none";
    }
  </script>
  
  <script>
    document.addEventListener("keydown", function(event) {
      if (event.key === "Escape") {
        window.location.href = "index";
      }
    });
  </script>

</body>
</html>