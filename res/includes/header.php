<meta charset="utf-8">
<meta name="application-name" content="Scuffed Development">
<meta name="keywords" content="Scuffed, Dev, Development, Scuffed Development">
<meta name="description" content="Home of the Scuffed Developers!">
<meta name="author" content="Scuffed Development">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/res/css/gradient.css">
<link rel="stylesheet" href="/res/css/bootstrap.min.css">
<link rel="stylesheet" href="/res/css/style.css">
<link rel="stylesheet" href="/res/css/ScuffedFrame.css">
<link rel="stylesheet" href="/res/css/m.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">


<style type="text/css">
html {
    min-height: 100vh;
    position: relative;
}

body {
    padding-bottom: 3em;
}

footer {
    position: relative;
    top: 50px;
    width: 100%;
    height: 3em;
}

.bg-black {
    background-color: #242a30;
    color: #fff
}

.bg-black2 {
    background-color: #000;
    color: #fff
}

.bg-nav {
    background-color: #131a20;
    color: #fff
}

.nav-link {
    color: #ffffff80 !important;
}

.nav-link.active {
    color: #ffffff !important;
}

.logothingy {
    width: 32px;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
</style>

<nav class="navbar navbar-expand-sm bg-nav" id="navbar">
    <a class="navbar-brand" href="/">
        <img src="/res/img/favicon.ico" alt="Logo" class="logothingy">
    </a>
    <?php
    $page = $_SERVER["PHP_SELF"];
    $ishome = $page == "/index.php";
    $isGames = $page == "/Games/index.php" || $page == "/Games/Bhop/index.php" || $page == "/Games/SVN/index.php";
    $isMore = $page == "/More/index.php";
    ?>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link<?php if ($ishome) echo (" active"); ?>" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link<?php if ($isGames) echo (" active"); ?>" href="/Games/">Games</a>
        </li>
        <li class="nav-item">
            <a class="nav-link<?php if ($isMore) echo (" active"); ?>" href="/More/">More</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://scuffed.dev/invite">Discord Server</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://api.scuffed.dev">ScuffedAPI</a>
        </li>
    </ul>
</nav>