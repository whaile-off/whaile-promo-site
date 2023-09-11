<?php
$navbareng = <<<HTML
<div class="navbar" style="position: absolute;top: 0;">
    <a class="logo"><img src="https://whaile.ru/img/_whaile_.png" width="40px" alt="_whaile_"></a>

    <audio id="audio" controls style="display: none;">
        <source src="m.mp3" type="audio/mpeg">
    </audio>

    <div class="audio-visualizer">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>

    <div class="nav-buttons" id="navMenu">
        <a href="https://whaile.ru" class="nav-btn mainButton">Home</a>
    </div>
</div>
HTML;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scripts/index.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>whaile | my coding site</title>
    <meta property="og:description" content="I am a Full-Stack developer. I specialize in creating websites, programs, scripts, bots and other programs. My skills cover a wide range of programming languages, including HTML, Java, sql, Python, CSS, PHP and JavaScript.">
    <meta data-rh="true" name="description" content="I am a Full-Stack developer. I specialize in creating websites, programs, scripts, bots and other programs. My skills cover a wide range of programming languages, including HTML, Java, sql, Python, CSS, PHP and JavaScript.">
</head>
<body>

<div class="blur-1"></div>
<div class="blur-2"></div>

<div class="wfon">404</div>

<div class="center">
    <div class="image" style="background-image: url('/img/_whaile_.png')"></div>

    <div class="wheel" style="font-size: 0.5em;">
        <div class="wheel__word">
            <div class="wheel__letter2">Y</div>
            <div class="wheel__letter2">O</div>
            <div class="wheel__letter2">U</div>
        </div>

        <div class="wheel__word">
            <div class="wheel__letter2">C</div>
            <div class="wheel__letter2">A</div>
            <div class="wheel__letter2">N</div>
        </div>

        <div class="wheel__word">
            <div class="wheel__letter2">C</div>
            <div class="wheel__letter2">L</div>
            <div class="wheel__letter2">I</div>
            <div class="wheel__letter2">C</div>
            <div class="wheel__letter2">K</div>
        </div>

        <div class="wheel__word">
            <div class="wheel__letter2">H</div>
            <div class="wheel__letter2">E</div>
            <div class="wheel__letter2">R</div>
            <div class="wheel__letter2">E</div>
        </div>
    </div>

    <div class="wheel centerbtn">
        <div class="wheel__word">
            <div class="wheel__letter">I</div>
            <div class="wheel__letter">A</div>
            <div class="wheel__letter">M</div>
        </div>

        <div class="wheel__word">
            <div class="wheel__letter">C</div>
            <div class="wheel__letter">O</div>
            <div class="wheel__letter">D</div>
            <div class="wheel__letter">E</div>
            <div class="wheel__letter">R</div>
        </div>

        <div class="wheel__word">
            <div class="wheel__letter">_</div>
            <div class="wheel__letter">w</div>
            <div class="wheel__letter">h</div>
            <div class="wheel__letter">a</div>
            <div class="wheel__letter">i</div>
            <div class="wheel__letter">l</div>
            <div class="wheel__letter">e</div>
            <div class="wheel__letter">_</div>
        </div>
    </div>

    <div class="wh">_whaile_</div>
</div>

<div class="aboutp" style="display: none;">
    <div class="worksc">
        <div class="done margin" style="overflow: hidden;">
            <div class="card" style="width: 80%;">
                <div class="head">I am a Full-Stack developer</div>
                <div class="desk" style="width: 97%;">I specialize in creating websites, programs, scripts, bots and other programs.<br>
                    My skills cover a wide range of programming languages, including HTML, Java, sql, Python, CSS, PHP and JavaScript.</div>
                <div class="linear"></div>
                <a href="https://github.com/whaile-off" target="_blank" style="text-decoration: none;">
                    <div class="bot" style="width: 120px;">
                        <div class="text">GitHub</div>
                        <img src="https://whaile.ru/img/arr.svg" width="20px" alt="arrow">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?= $navbareng ?>

<div class="footer">
    <div class="footer-links">
        <a href="https://t.me/whaile_off_3" target="_blank" class="icon btn" style="background-image: url('/img/tg.svg')"></a>
        <a href="https://vk.com/whaile_off_2" target="_blank" class="icon btn" style="background-image: url('/img/vk.svg')"></a>
        <a href="https://github.com/whaile-off" target="_blank" class="icon btn" style="background-image: url('/img/git.svg')"></a>
        <a href="https://www.youtube.com/@_whaile_" target="_blank" class="youtube bnt" style="background-image: url('/img/youtube.svg')"></a>
    </div>
</div>

<script src="scripts/index.js"></script>
</body>
</html>