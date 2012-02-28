<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="Håkan Schallinger är designer och utvecklar koncept för grafiska identiteter samt förpackningsdesign.">
		<meta name="keywords" content="förpackningsdesign,grafisk profil,logotyp,logotype,illustration">
		<link rel="icon" href="favicon.png" />
		<title>Håkan Schallinger</title>

		<!-- LESS converted to css and minified via build script -->
		<link rel="stylesheet/less" href="less/style.less">
		<script src="js/libs/less.js"></script>
		<!-- end LESS -->
	</head>

	<body>
		<div id="wrapper">
			<div class="upper clearfix">
				<div class="left">
					<header>Logotypica <span class="reg">®</span></header>
					<div class="desc">Håkan Schallinger är en stockholmsbaserad designer som arbetar med förpackningsdesign och grafiska identiteter. Han har utvecklat designkoncept för varumärken som ProViva, Felix och Skånemejerier.</div>
					<div class="contact">
						<p>Tjänster:</p>
						<p>Förpackningsdesign</p>
						<p>Grafisk identitet</p>
						<p>Logotyp & symboler</p>
						<p>Illustration</p>
						<section>
							<p>Kontakt:</p>
							<p>hakan@logotypica.se</p>
							<p>+46 (0) 70-791 88 97</p>
						</section>
					</div>
				</div>
	
				<div class="right">
					<div class="slider-wrapper theme-default">
						<div class="ribbon"></div>
						<div id="slider" class="nivoSlider">
							<img src="images/projects/leafs.png" alt="Mönster" />
							<img src="images/projects/cider.jpg" alt="Cider" />
							<img src="images/projects/rabbit.png" alt="Logotyp" />
							<img src="images/projects/lll.jpg" alt="Ljus Liten Lager" />
							<img src="images/projects/etac.jpg" alt="Etac" />
							<img src="images/projects/skanemejerier.jpg" alt="Skånemejerier" />
							<img src="images/projects/hamilton.png" alt="Lady Hamilton" />
							<img src="images/projects/svegro.png" alt="Svegro" />
							<img src="images/projects/bocca.jpg" alt="Bocca" />
							<img src="images/projects/gant.jpg" alt="Gant" />
						</div>
					</div>
				</div>
			</div>
			<footer>Copyright &copy; 2012 Logotypica.</footer>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

		<script src="js/libs/jquery.nivo-v2.7.1.min.js"></script>

		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({
					effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
					pauseTime: 3000, // How long each slide will show
					pauseOnHover: false, // Stop animation while hovering
				});
			});

			
		</script>
	</body>
</html>