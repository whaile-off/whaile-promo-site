<?php
$navbar = <<<HTML
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
        <div class="nav-btn mainButton">Home</div>
        <div class="nav-btn worksButton">Works</div>
        <div class="nav-btn skilsButton">Skils</div>
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

    <div class="main" style="display: block;">
	
		<div class="aboutp" style="display: none;">
			<div class="wfon">ABOUT</div>
		</div>
		
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
			
            <div class="wheel" id="center">
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
				<div class="done" style="justify-content: center;">
					<div class="card" style="width: 55%;">
						<div class="head">I am a Full-Stack developer</div>
						<div class="desk" style="width: 97%;">I specialize in creating websites, programs, scripts, bots and other programs.<br>
						My skills cover a wide range of programming languages, including HTML, Java, sql, Python, CSS, PHP and JavaScript.<br><br>

						I also have the skills to fully copy websites.<br>
						This includes not only recreating the visual style of the site using HTML and CSS, but also the implementation of all functional elements.</div>
						<div class="linear"></div>
						<a href="https://github.com/whaile-off" target="_blank">
							<div class="bot" style="width: 120px;">
								<div class="text">GitHub</div>
								<img src="https://whaile.ru/img/arr.svg" width="20px" alt="arrow">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

        <?= $navbar ?>

        <div class="footer">
            <div class="footer-links">
                <a href="https://t.me/whaile_off_3" target="_blank" class="icon btn" style="background-image: url('/img/tg.svg')"></a>
                <a href="https://vk.com/whaile_off_2" target="_blank" class="icon btn" style="background-image: url('/img/vk.svg')"></a>
                <a href="https://github.com/whaile-off" target="_blank" class="icon btn" style="background-image: url('/img/git.svg')"></a>
                <a href="https://www.youtube.com/@_whaile_" target="_blank" class="youtube bnt" style="background-image: url('/img/youtube.svg')"></a>
            </div>
        </div>
    </div>

    <div class="worksp" style="display: none">
	
		<div class="wfon">WORKS</div>
		
		<div class="worksc">
			<div class="done">
				
                <div class="card">
					<div class="head">HDWcaptcha</div>
					<div class="desk">Solve captchas quickly and accurately!</div>
					<div class="linear"></div>
					<div class="btn">
						<a href="https://github.com/whaile-off/hdwcaptcha" target="_blank" style="text-decoration: none;">
							<div class="bot">
								<div class="text">Git</div>
								<img src="https://whaile.ru/img/arr.svg" width="20px" alt="arrow">
							</div>
						</a>
                        <a href="https://whaile.ru/demo/hdwcaptcha/index.php" target="_blank" style="text-decoration: none;">
                            <div class="bot">
                                <div class="text">Demo</div>
                            </div>
                        </a>
					</div>
				</div>
				
				<div class="card">
					<div class="head">BestraXstudio</div>
					<div class="desk">Site for BestraXstudio</div>
					<div class="linear"></div>
					<div class="btn">
						<a href="https://github.com/whaile-off/BestraXstudio" target="_blank" style="text-decoration: none;">
							<div class="bot">
								<div class="text">Go</div>
								<img src="https://whaile.ru/img/arr.svg" width="20px" alt="arrow">
							</div>
						</a>

                        <a href="https://whaile.ru/demo/bestraxstudio/index.php" target="_blank" style="text-decoration: none;">
                            <div class="bot">
                                <div class="text">Demo</div>
                            </div>
                        </a>
					</div>
				</div>
				
				<div class="card">
					<div class="head">HDWkeys</div>
					<div class="desk">Application in Java for content creators to conveniently display mouse clicks and the same keyboard!</div>
					<div class="linear"></div>
					<div class="btn">
						<a href="https://github.com/whaile-off/hdwkeys" target="_blank" style="text-decoration: none;">
							<div class="bot">
								<div class="text">Go</div>
								<img src="https://whaile.ru/img/arr.svg" width="20px" alt="arrow">
							</div>
						</a>
					</div>
				</div>
				
				<div class="card">
					<div class="head">VkCaptchaGen</div>
					<div class="desk">Captcha generator from vk.com</div>
					<div class="linear"></div>
					<div class="btn">
						<a href="https://github.com/whaile-off/vk-captcha-generator" target="_blank" style="text-decoration: none;">
							<div class="bot">
								<div class="text">Go</div>
								<img src="https://whaile.ru/img/arr.svg" width="20px" alt="arrow">
							</div>
						</a>
					</div>
				</div>
				
				<div class="card">
					<div class="head">VkCaptchaDow</div>
					<div class="desk">Captcha downloader from vk.com</div>
					<div class="linear"></div>
					<div class="btn">
						<a href="https://github.com/whaile-off/vk-captcha-dowloader" target="_blank" style="text-decoration: none;">
							<div class="bot">
								<div class="text">Go</div>
								<img src="https://whaile.ru/img/arr.svg" width="20px" alt="arrow">
							</div>
						</a>
					</div>
				</div>
				
				<div class="end">End</div>
            </div>
			
			<div class="arrows">
				<div class="arrow arrowup"><</div>
				<div class="arrow arrowdown">></div>
			</div>
			
			<div class="I"><img src="https://whaile.ru/img/I.svg" width="250px" alt="I"></div>
		</div>

        <?= $navbar ?>

        <div class="footer">
            <div class="footer-links">
                <a href="https://t.me/whaile_off_3" target="_blank" class="icon btn" style="background-image: url('/img/tg.svg')"></a>
                <a href="https://vk.com/whaile_off_2" target="_blank" class="icon btn" style="background-image: url('/img/vk.svg')"></a>
                <a href="https://github.com/whaile-off" target="_blank" class="icon btn" style="background-image: url('/img/git.svg')"></a>
                <a href="https://www.youtube.com/@_whaile_" target="_blank" class="youtube bnt" style="background-image: url('/img/youtube.svg')"></a>
            </div>
        </div>
    </div>
	
	<div class="skilsp" style="display: none;width: 100vw;height: 100vh;">
	
		<div class="wfon">SKILS</div>
		
		<div class="worksc">
			<div class="done">
				<div class="card">
					<div class="head">Languages</div>
					<div class="desk">
						HTML<br>
						CSS<br>
						JavaScript<br>
						Python<br>
						Java<br>
						PHP<br>
						SQL<br>
					</div>
					<div class="linear"></div>
					<div class="bot" style="width: 130px;white-space: pre;">
						<div class="text">Slide down?</div>
					</div>
				</div>
				<div class="card">
					<div class="head">Frontend</div>
					<div class="desk">
						Development of user interfaces (UI) on the client side.
						Creating interactive and visually appealing web pages using HTML, CSS, and JavaScript.
						Optimizing website performance for various browsers and devices.
					</div>
					<div class="linear"></div>
					<div class="bot" style="width: 130px;white-space: pre;">
						<div class="text">Slide down?</div>
					</div>
				</div>
				<div class="card">
					<div class="head">Backend</div>
					<div class="desk">
						Development of the server-side of web applications.
						Creating and configuring servers, handling client requests.
						Working with databases, storing and processing data on the server.
					</div>
					<div class="linear"></div>
					<div class="bot" style="width: 130px;white-space: pre;">
						<div class="text">Slide down?</div>
					</div>
				</div>
				<div class="card">
					<div class="head">Web App</div>
					<div class="desk">
						Developing web applications using both frontend and backend technologies.
						Creating full-fledged web applications capable of performing various functions and tasks.
						Integrating with various third-party services and APIs.
					</div>
					<div class="linear"></div>
					<div class="bot" style="width: 130px;white-space: pre;">
						<div class="text">Slide down?</div>
					</div>
				</div>
				<div class="card">
					<div class="head">API</div>
					<div class="desk">
						Creating and documenting APIs (Application Programming Interfaces).
						Developing interfaces for communication between different applications and services.
						Providing access to your application's functionality through APIs.
					</div>
					<div class="linear"></div>
					<div class="bot" style="width: 130px;white-space: pre;">
						<div class="text">Slide down?</div>
					</div>
				</div>
                <div class="card">
					<div class="head">Design</div>
					<div class="desk">
						My specialization includes creating effective design solutions for various projects.
						I strive to create visually appealing and functional designs that highlight the uniqueness of each project.
					</div>
					<div class="linear"></div>
					<div class="bot" style="width: 130px;white-space: pre;">
						<div class="text">Slide down?</div>
					</div>
				</div>
				<div class="card">
					<div class="head">Copywriting</div>
					<div class="desk">
						My experience in copywriting allows me to create persuasive and informative texts for websites, blogs, and other materials.
						I specialize in creating content that captures the reader's attention and maintains their interest.
					</div>
					<div class="linear"></div>
					<div class="bot" style="width: 130px;white-space: pre;">
						<div class="text">Slide down?</div>
					</div>
				</div>

				<div class="card">
					<div class="head">VPS/VDS</div>
					<div class="desk">
						I have experience working with virtual and dedicated servers.
						My expertise includes setting up, maintaining, and optimizing VPS/VDS to ensure stable and secure operation of server infrastructure.
					</div>
					<div class="linear"></div>
					<div class="bot" style="width: 130px;white-space: pre;">
						<div class="text">Slide down?</div>
					</div>
				</div>

				<div class="card">
					<div class="head">Web Hosting</div>
					<div class="desk">
						My experience in web hosting allows me to provide professional services for hosting and supporting websites.
						I handle the setup of hosting environments, ensuring reliable and secure operation of websites.
					</div>
					<div class="linear"></div>
					<div class="bot" style="width: 130px;white-space: pre;">
						<div class="text">Slide down?</div>
					</div>
				</div>
				
				<div class="end">End</div>
            </div>
			
			<div class="arrows">
				<div class="arrow arrowup"><</div>
				<div class="arrow arrowdown">></div>
			</div>
			
			<div class="I"><img src="https://whaile.ru/img/I.svg" width="250px" alt="I"></div>
		</div>

        <?= $navbar ?>

        <div class="footer">
            <div class="footer-links">
                <a href="https://t.me/whaile_off_3" target="_blank" class="icon btn" style="background-image: url('/img/tg.svg')"></a>
                <a href="https://vk.com/whaile_off_2" target="_blank" class="icon btn" style="background-image: url('/img/vk.svg')"></a>
                <a href="https://github.com/whaile-off" target="_blank" class="icon btn" style="background-image: url('/img/git.svg')"></a>
                <a href="https://www.youtube.com/@_whaile_" target="_blank" class="youtube bnt" style="background-image: url('/img/youtube.svg')"></a>
            </div>
        </div>
    </div>

    <script src="scripts/index.js"></script>
</body>
</html>