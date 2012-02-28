<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
					<nav>Logotypica</nav>
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
							<img src="images/projects/leafs.png" alt="" />
							<img src="images/projects/cider.jpg" alt="" />
							<img src="images/projects/rabbit.png" alt="" />
							<img src="images/projects/lll.jpg" alt="" />
							<img src="images/projects/etac.jpg" alt="" />
							<img src="images/projects/skanemejerier.jpg" alt="" />
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