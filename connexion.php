<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BossInfoNet Connexion</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<script type="text/javascript" src="docjs/jquery.js"></script>
		<script src="script.js" type="text/javascript" ></script>
		<script src="docjs/validekeyup.js" type="text/javascript" ></script>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
	</head>
	<body>
		<div id="container">
	<header> 
		<a id="logo"><img src="image/bosinfone.jpg" width="250px" height="50px" alt="bosinfone" </a>    
		<nav>
			<ul>
				<li><a href="#" class="current">Accueil</a></li>
				<li><a href="#" class="current">Cours</a></li>
				<li><a href="#" class="current">Forum</a></li>
				<li><a href="#" class="current">Blog</a></li>
				<li><a href="#" class="current">Apropos</a></li>
			</ul>
		</nav>
			<span><a href="inscription.html" class="renvoie">s'inscrire</a></span>
			<span><a href="connexion.html" class="renvoie">Connexion</a></span>
	</header>
	<section>
		<article>
		<form action="Accueil.html" method="post"  onsubmit=" return fonction1()">
			<div id="cadre-connexion">
				<input name="adresse1" id="adresse1" type="email" placeholder="Email"/><br></br>
				<input name="passeword1" id="passeword1" type="password" placeholder="Passeword"/><br></br>
				<input type="submit" value="Connexion" id="connexion-bouton"/>
			</div>
		</form>
		</article>
	</section><footer>
		<section id="section-footer">

			<section id="footer-block">
				<aside class="">
					<nav>
						<ul>
							<li><a href="#" class="current">Accueil</a></li>
							<li><a href="#" class="current">Cours</a></li>
							<li><a href="#" class="current">Forum</a></li>
							<li><a href="#" class="current">Blog</a></li>
							<li><a href="#" class="current">Apropos</a></li>
						</ul>
					</nav>
					</aside>
					
					
				
				<aside id="reseaufooter">
					<ul>
						<li><a href="#"><img src="image/facebook-logo.png" alt="facebook"  /></a></li>
						<li><a href="#"> <img src="image/6a00d8341bfcb953ef019b01708a6c970d.png" alt="6a00d8341bfcb953ef019b01708a6c970d" /></a></li>
						<li><a href="#"><img src="image/logo-youtube-305x305.png" alt="logo-youtube-305x305" /></a></li>
						<li><a href="#"><img src="image/gmail.jpg" alt="gmail"/></a></li>
					</ul>
				</aside>
					<aside class="copywrite">
								<p>BOSSINFONET  &copy; 2016 <a href="#">BossInfoNet.com</a> </p>
					</aside>
			</section>

		</section>
	</footer>
</div>
</body>
</html>
