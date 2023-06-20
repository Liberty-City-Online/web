<!DOCTYPE html>
<html>
<head>
    <title>LC - O Developer Portal — Documentation</title>
    <link rel="stylesheet" type="text/css" href="style/css/docs.css">
    <script src="style/js/docs.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="style/image/logo.png" alt="Logo">
            <p style="display: block;
    font-size: 0.67em;
    font-weight: bold;">DEVELOPER PORTAL</p>
        </div>
    </header>
    <nav class="sidebar">
        <ul class="categories">
            <li><a href="#" class="active">Home</a></li>
            <li>
                <a href="#">Client</a>
                <ul class="sub-categories">
                    <li><a href="#">Scripting</a></li>
                    <li><a href="#">Callbacks</a></li>
                    <li><a href="#">Functions</a></li>
                    <li><a href="#">Lua</a></li>
                    <li><a href="#">Resources</a></li>
                </ul>
            </li>
            <li><a href="#">Server</a></li>
            <li><a href="#">Tutorials</a></li>
            <li><a href="#">Libraries</a></li>
        </ul>
    </nav>
    <div class="content">
        <h1>LC - O Wikiye Hoş Geldiniz</h1>
        <p>Geniş SA-MP topluluğu ve open.mp ekibi tarafından geliştirilen SA-MP wiki'ye hoşgeldiniz!</p>
        <p> Bu site, SA-MP ve neticede open.mp için kolay erişilebilmeyi, doküman kaynağına kolay katkı sağlamayı hedefliyor..</p>

        <div class="code-container">
            <pre>
                <code class="language-javascript">
function drawPlayerBar(x, y, width, height, health, armor, ammo) {
    // Background
    dxDrawRectangle(x, y, width, height, tocolor(0, 0, 0, 200));
                
    // Health Bar
    let healthWidth = width * (health / 100);
    dxDrawRectangle(x, y, healthWidth, height * 0.4, tocolor(255, 0, 0));
}

function onPlayerBarRender() {
    let screenWidth, screenHeight = guiGetScreenSize();
    let player = getLocalPlayer();
    let health = getElementHealth(player);
                
    let barWidth = screenWidth * 0.3;
    let barHeight = screenHeight * 0.05;
    let barX = (screenWidth - barWidth) * 0.5;
    let barY = screenHeight - barHeight * 2;
                
    drawPlayerBar(barX, barY, barWidth, barHeight, health);
}

addEventHandler("onClientRender", root, onPlayerBarRender);</code>
            </pre>
        </div>
    </div>

    <footer>
        <div class="footer-text">Copyright (C) Liberty City Online 2023</div>
    </footer>


    <script src="style/js/prism.js"></script>
    <link rel="stylesheet" type="text/css" href="style/css/prism.css">
    <script>
        // Prism.js kütüphanesi kullanarak otomatik renklendirme
        Prism.highlightAll();
    </script>

</body>
</html>
