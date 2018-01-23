<?php

session_start();

if(isset($_POST['e-mail']))
{
	$checkFlag = true;
	$name = $_POST["name"];
	$message = $_POST["message"];
	$email = $_POST['e-mail'];
	$topic = $_POST['topic'];
	$emailB = filter_var($email,FILTER_SANITIZE_EMAIL);
	if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false) || ($emailB != $email))  //sprawdz czy adres jest poprawny
		{
			$checkFlag=false;
			$_SESSION['e_mail']="Wprowadź poprawny</br> adres e-mail.";
                        
		}
	if (empty($name)) 
		{ 
		 	$checkFlag=false;
		 	$_SESSION['e_name']="Podaj swoje imię.";
                        
		}

	if (empty($topic)) 
		{ 
		 	$checkFlag=false;
		 	$_SESSION['e_topic']="Podaj temat wiadomości.";
                        
		}

	if (empty($message) || strlen($message)<=5) 
		{
  			$checkFlag=false;
  			$_SESSION['e_message']="Wiadomość musi mieć min. 6 znaków.";
                        
		}
	if ($checkFlag=true)
		{
        	$from="From: $name<$email>\r\nTopic: $topic\r\nReturn-path: $email";
       		$subject="Wiadomość z Maksym Gilewski | Portfolio";
    		$to = "maksym.gilewski@gmail.com";
    		try{
        	mail($to, $subject, $message, $from);
       		}catch(Exception $e)
			{
			echo 'Server error, please try again later !';
			echo '<br/>Informacja developerska: '.$e;
			}
       			$_SESSION['ok']="Twoja wiadomość została wysłana, dziękujemy !";
        	}
}

?>	

<!DOCTYPE HTML>
<head>
<title>Maksym Gilewski: Junior Frontend Developer | Portfolio</title>
<meta charset="utf-8">
<meta lang="pl">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/style.css" type="text/css">
<link rel="stylesheet" href="style/rwd.css" type="text/css">
<link rel="icon" href="images/Logo2.png">
<link href="style/hover.css" rel="stylesheet" media="all">
<link href="style/prism.css" rel="stylesheet" >
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/movingbg.js" type="text/javascript"></script>


<link href="https://fonts.googleapis.com/css?family=Exo|Nunito" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body onload="volume()">
	<audio id="music" src="music/bg-music.mp3" type="audio/mpeg" loop>
	<p>If you are reading this, it is because your browser does not support the audio element.</p>
	</audio>
	<header class="start_page">
	<section id="start_page-bg">
	<section id="particles-js">
		<nav>
			<input type="checkbox" id="toggle"/>
			<label for="toggle" class="toggle" id="nav-icon3" onclick="toggle_visibility('menu')">&#9776;</label>
			<div class="menu_bar" id="menu">
				<ul>
					<li class="hvr-underline-from-center"><a href="#about">O mnie</a></li>
					<li class="hvr-underline-from-center"><a href="#projects">Projekty</a></li>
					<li class="hvr-underline-from-center"><a href="#contact">Kontakt</a></li>
					<li class="hvr-underline-from-center" id="mute_button" onclick="mute()"><img src="images/mute.png" width="20"></li>
				</ul>

			</div>
		</nav>
		<div class="author_logo">
			<img src="images/Logo2.png">
		</div>
		<div style="clear: both;"></div>
		<div class="title">
			<h1>Maksym Gilewski</h1>
			<h2><b>Front-End</b> Developer <b>•</b> Web Designer</h2>
		</div>
		<div class="main_bottom_panel">
			<div class="show_more" ><a href="#about"><img src="images/arrow.png"></a></div>
		</div>
	</section>
</section>
</header>
<div style="clear: both;"></div>
	<main>
		<div id="about" class="about_me">
			<div class="about-me_content">
				<h1>O mnie</h1>
				<p>Jestem studentem trzeciego roku informatyki Politechniki Krakowskiej na Wydziale Inżynierii Elektrycznej i Komputerowej. Swoją przygodę z tworzeniem stron internetowych zacząłem na przełomie 2016 a 2017 roku. W chwili obecnej Freelancer.
				Podczas tworzenia stron zawsze staram się przemyśleć każdy układ i zapewnić sprawne i prawidłowe działanie na wszystkich urządzeniach jak i przeglądarkach.
				W przyszłości planuję uzupełnić swoją wiedzę o preprocesory CSS oraz frameworki JS. 
				</p>
				<h1>Co potrafię ? </h1>
				<div class="skillbar clearfix " data-percent="90%">
		<div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
					<div class="skillbar-bar" style="background: #e67e22;"></div>
					<div class="skill-bar-percent">90%</div>
				</div> <!-- End Skill Bar -->

				<div class="skillbar clearfix " data-percent="80%">
					<div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
					<div class="skillbar-bar" style="background: #3498db;"></div>
					<div class="skill-bar-percent">80%</div>
				</div> <!-- End Skill Bar -->

				<div class="skillbar clearfix " data-percent="25%">
					<div class="skillbar-title" style="background: #2c3e50;"><span>PHP</span></div>
					<div class="skillbar-bar" style="background: #2c3e50;"></div>
					<div class="skill-bar-percent">25%</div>
				</div> <!-- End Skill Bar -->

				<div class="skillbar clearfix " data-percent="40%">
					<div class="skillbar-title" style="background: #46465e;"><span>JS</span></div>
					<div class="skillbar-bar" style="background: #5a68a5;"></div>
					<div class="skill-bar-percent">40%</div>
				</div> <!-- End Skill Bar -->

				<div class="skillbar clearfix " data-percent="85%">
					<div class="skillbar-title" style="background: #333333;"><span>Wordpress</span></div>
					<div class="skillbar-bar" style="background: #525252;"></div>
					<div class="skill-bar-percent">85%</div>
				</div> <!-- End Skill Bar -->

				<div class="skillbar clearfix " data-percent="70%">
					<div class="skillbar-title" style="background: #27ae60;"><span>Java+FX</span></div>
					<div class="skillbar-bar" style="background: #2ecc71;"></div>
					<div class="skill-bar-percent">70%</div>
				</div> <!-- End Skill Bar -->

				<div class="skillbar clearfix " data-percent="50%">
					<div class="skillbar-title" style="background: #124e8c;"><span>Photoshop</span></div>
					<div class="skillbar-bar" style="background: #4288d0;"></div>
					<div class="skill-bar-percent">50%</div>
				</div>			
			</div>
			<div class="about_me-code">
				<pre class="language-javascript">
					<code class="language-javascript">
										jQuery(document).ready(function(){
						jQuery('.skillbar').each(function(){
							jQuery(this).find('.skillbar-bar').animate({
								width:jQuery(this).attr('data-percent')
							},6000);
						});
					});
					</code>
				</pre>
				<pre class="language-css">
					<code class="language-css">
										.skillbar {	
	position:relative;
	display:block;
	margin-bottom:50px;
	width:100%;
	background:#eee;
	height:55px;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	-webkit-transition:0.4s linear;
	-moz-transition:0.4s linear;
	-ms-transition:0.4s linear;
	-o-transition:0.4s linear;
	transition:0.4s linear;
	-webkit-transition-property:width, background-color;
	-moz-transition-property:width, background-color;
	-ms-transition-property:width, background-color;
	-o-transition-property:width, background-color;
	transition-property:width, background-color;
}

.skillbar-title {
	position:absolute;
	top:0;
	left:0;
width:110px;
	font-weight:bold;
	font-size:13px;
	color:#ffffff;
	background:#6adcfa;
	-webkit-border-top-left-radius:3px;
	-webkit-border-bottom-left-radius:4px;
	-moz-border-radius-topleft:3px;
	-moz-border-radius-bottomleft:3px;
	border-top-left-radius:3px;
	border-bottom-left-radius:3px;
}

.skillbar-title span {
	display:block;
	background:rgba(0, 0, 0, 0.1);
	padding:0 20px;
	height:55px;
	line-height:55px;
	-webkit-border-top-left-radius:3px;
	-webkit-border-bottom-left-radius:3px;
	-moz-border-radius-topleft:3px;
	-moz-border-radius-bottomleft:3px;
	border-top-left-radius:3px;
	border-bottom-left-radius:3px;
}

.skillbar-bar {
	height:55px;
	width:0px;
	background:#6adcfa;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
}

.skill-bar-percent {
	position:absolute;
	right:10px;
	top:0;
	font-size:11px;
	height:55px;
	line-height:55px;
	color:#ffffff;
	color:rgba(0, 0, 0, 0.4);
}

					</code>
				</pre>
			</div>

		</div>
		<div style="clear: both;"></div>
	<section class="projects_section" id="projects">
		<h1>Projekty</h1>
		<div class="project">
			<div class="project-left_col">
				<h2>LimitlessGames.pl</h2>
				<p>Strona stworzona na potrzeby nowopowstałego studia developerskiego zajmującego się tworzeniem gier mobilnych na platformy Android ora iOS. Strona zrobiona od początku do końca ręcznie z pomocą HTML, CSS, JS oraz PHP.</p>
				<button class="github_button">GitHub</button>
				<button class="live_button">Live</button>
				<h5 style="color:green;">Online</h5>
			</div>
			<div class="project-right_col one">

			</div>
		</div>
		<div class="project">
			<div class="project-right_col two">

			</div>
			<div class="project-left_col reverse">
				<h2 class="reverse">Wieik.info</h2>
				<p>Reinkarnacja strony wieik.ovh, służącej studentom uczelni Politechniki Krakowskiej do gromadzenia materiałów ze studiów. Strona bazuje na CMS od Wordpress.</p>
				<button class="live_button">Live</button>
				<button class="github_button">GitHub</button>
				<div style="clear: both;"></div>
				<h5 style="color:green;">Online</h5>
			</div>	
		</div>
		<div class="project">
			<div class="project-left_col">
				<h2>CsGlobal.pl</h2>
				<p>Bardzo prosta strona z wideo tłem. Zawierająca podstawowe informację o graczu, jego ustawieniach, konfiguracji gry itd. Stworzona za pomocą HTML+CSS+JS.</p>
				<button class="github_button">GitHub</button>
				<button class="live_button">Live</button>
				<h5 style="color:red;">Offline</h5>
			</div>
			<div class="project-right_col three">

			</div>
		</div>
		<div class="project">
			<div class="project-right_col four">

			</div>
			<div class="project-left_col reverse">
				<h2>GryffindorFoundation.org</h2>
				<p>Strona informacyjna poświęcona fundacji Gryffindor. Bazuje jedynie na czystym HTML + CSS z małym użyciem języka PHP w celu obsługi formularza kontaktowego.</p>
				<button class="live_button">Live</button>
				<button class="github_button">GitHub</button>
				<div style="clear: both;"></div>
				<h5 style="color:green;">Online</h5>
			</div>
		</div>
		<div class="project">
			<div class="project-left_col">
				<h2>Devilpaws.org</h2>
				<p>Strona stworzona dla organizacji e-sportowej. Opierała się na Wordpressie z wieloma modyfikacjami dotyczącymi wyglądu. Galeria, kontakt, blog.</p>
				<button class="github_button">GitHub</button>
				<button class="live_button">Live</button>
				<h5 style="color:red;">Offline</h5>
			</div>
			<div class="project-right_col five">

			</div>
		</div>
	</section>
	<section class="contact_section" id="contact">
		
		<div class="contact_section-content">
			<div class="contact_section-left_col">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.7807077535654!2d19.94066941615388!3d50.07166837942493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b04a4a0d5bf%3A0x41a815e1860a19eb!2sPolitechnika+Krakowska+im.+Tadeusza+Ko%C5%9Bciuszki!5e0!3m2!1spl!2spl!4v1516193383546" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="contact_section-right_col">
				<div class="contact_section-right_col-content">
					<h1>Media społecznościowe</h1>
					<div class="contact_section-socials">
						<div class="contact_section-right_col-content_social facebook">
						<a href="https://www.facebook.com/maksym.gilewski" target="_blank"><img src="images/facebook.png" width="100" height="100"></a>
						</div>
						
						<div class="contact_section-right_col-content_social gplus">
						<a href="https://plus.google.com/u/1/115452132300004127175" target="_blank"><img src="images/gplus.png"  width="100" height="100"></a>
						</div>
						
						<div class="contact_section-right_col-content_social linkedin">
						<a href="https://www.linkedin.com/in/maksym-gilewski-79b850156/" target="_blank"><img src="images/linkedin.png"  width="100" height="100"></a>
						</div>
					</div>
					<h2>E-mail: maksym.gilewski@gmail.com</h2>
					<div class="contact_container-content">
					<p id="form"></p>
					<div class="contact_container-content_part">
						<form class="contact_container-form" method="post" id="contactForm">
							<h1>Skontaktuj się ze mną</h1>
							<input class="name" type="text" name="name" id="name" placeholder="Twoje imię">
							
							<input class="name" type="text" name="e-mail" id="e-mail"placeholder="Twój adres e-mail" >
							<?php
								if(isset($_SESSION['e_name']))
								{
									echo '<div class="error2">'.$_SESSION['e_name'].'</div>';
									unset($_SESSION['e_name']);
								}
							?>
							<?php
								if(isset($_SESSION['e_mail']))
								{
									echo '<div class="error2">'.$_SESSION['e_mail'].'</div>';
									unset($_SESSION['e_mail']);
								}
							?>
							<input class="topic" type="text" name="topic" id="topic" placeholder="Temat">
							<?php
								if(isset($_SESSION['e_topic']))
								{
									echo '<div class="error2">'.$_SESSION['e_topic'].'</div>';
									unset($_SESSION['e_topic']);
								}
							?>
							<textarea class="msg" type="texarea" name="message" id="message" placeholder="Treść wiadomości"></textarea>
							<?php
							if(isset($_SESSION['e_message']))
							{
								echo '<div class="error2">'.$_SESSION['e_message'].'</div>';
								unset($_SESSION['e_message']);
							}
							else if(isset($_SESSION['ok']))
							{
								echo '<div class="error2">'.$_SESSION['ok'].'</div>';
								unset($_SESSION['ok']);
							}		
							?>
							<input class="contact_container-content-button" type="submit" name="submit" id="contact-send" value="Wyślij" onclick="location.href='#form';">
							</input>
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	</main>
	<div style="clear: both;"></div>
	<footer>
		<div class="footer_logo">
			<img src="images/logo2.png" width="150" height="150">
		</div>
		<div class="footer_content">
			<h2>2018 © Maksym Gilewski. All rights reserved.</h2>
		</div>
		<div class="footer_content-right">
			<a href="#about">O mnie</a>
			<a href="#projects">Projekty</a>
			<a href="#contact">Kontakt</a>
		</div>
	</footer>
<script src="js/prism.js" type="text/javascript"></script>
<script src="js/progress-bar.js" type="text/javascript"></script>
<script src="js/smooth-scroll.js" type="text/javascript"></script>
<script src="js/scroll-menu.js" type="text/javascript"></script>
<script src="js/particles.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
<script type="text/javascript">
	var audio = document.getElementById("music");
var button = document.getElementById("mute_button");
function mute(){
	if(audio.muted)
	{
		audio.muted = false;
		button.classList.remove("mute");
	}
	else
	{
		audio.muted = true;
		button.classList.add("mute");
	}
}

function volume(){
	audio.volume = 1;
}

function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }

</script>

</body>
</html>
