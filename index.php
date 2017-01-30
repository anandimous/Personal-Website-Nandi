<?php
if(isset($_POST['submit'])){
    $to = "anandi@buffalo.edu";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " wrote the following: " . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", I will reply back shortly.";
    }
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Aniruddha Nandi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">

						<img class="img-circle" src="images/p2.jpg" alt="" style="width:150px; height:150px; border:2px solid white;">

						<div class="content">
							<div class="inner">
								<h1>Aniruddha Nandi</h1>
								<p>Developing software efficiently, working hands-on in applying my knowledge to create versatile high-impact applications</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="#work">Work</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</nav>
					</header>

          <style type="text/css">
          ::-webkit-scrollbar {
              display: none;
          }
          </style>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								<span class="image main"><img src="images/pic01.jpg" alt="" /></span>
                <p><b>Work</b><br>
                    I am a skilled developer with a passion for creativity, algorithmic analysis & coding. Efficiency and time management are my prime motivating factors and I strive to build meaningful applications while collaborating with fellow developers by discussing and incorporating ideas to increase productivity and reduce programmatic runtime. I believe in hands-on experience and all my projects are not just for practice, but also incorporate learning in them so that I am able to explore new areas and concepts and hone my skills. I am currently pursuing my undergraduate bachelor’s degree in comp. sci. at the University at Buffalo SUNY.<br>
                   <b>Personal</b><br>
                   While I am not at work, I spend my free time exploring natural landscapes, trekking, spelunking and kayaking. I am an outdoor enthusiast and like to maintain a balance between my work and recreation to keep a healthy frame of mind at all times. In addition, I am also actively involved socially and hold several leadership positions at UB as well as help my peers and colleagues with any doubts they may have and pass on my education to others to provide everyone an accurate glimpse into the fascinating world of computer science and all its complexities.<br>
                   <b>>_</b><br>
                   I am always on the lookout for opportunities and have proven my worth by gaining an excellent recommendation at an internship during my freshman year. I am also actively involved with research and professional-development activities on-campus and when given a chance, always tend to surpass expectations. If you wish to contact me regarding opportunities, please feel free to do so at any time using this contact form. I look forward to hearing from you.</p>
                </article>

						<!-- Work -->
							<article id="work">
								<h2 class="major">Work</h2>
								<span class="image main"><img src="images/pic02.jpg" alt="" /></span>
								<p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.</p>
								<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet feugiat tempus.</p>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
								<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada fames ac ante ipsum primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum dolor sit amet.</p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form action="" method="post">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" name="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p>Feel free to contact me using the form or find out more via the icons below</p>
						<ul class="icons">
							<li><a href="https://www.facebook.com/anirnand" class="icon fa-facebook" target=_blank><span class="label">Facebook</span></a></li>
							<li><a href="https://www.linkedin.com/in/aniruddhanandi" class="icon fa-linkedin" target=_blank><span class="label">LinkedIn</span></a></li>
							<li><a href="https://github.com/anandimous" class="icon fa-github" target=_blank><span class="label">GitHub</span></a></li>
							<li><a href="https://about.gitlab.com/" class="icon fa-gitlab" target=_blank><span class="label">GitLab</span></a></li>
						</ul>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
