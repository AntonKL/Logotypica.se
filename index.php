<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
					<nav>Logotypica Design</nav>
					<div class="desc">Håkan Schallinger är senior designer och utvecklar designkonceptet och grafiska profiler. Håkan Schallinger har arbetat med varumärken som Felix, Cancerfonden, ProViva och Gant och drev under många är designbyrån Amore i Stockholm.</div>
					<div class="contact">
						<p>Håkan Schallinger</p>
						<p>Senior designer</p>
						<p>hakan@logotypica.se</p>
						<section>
							<p>Logotypica &reg;</p>
							<p>Granevägen 4</p>
							<p>182 55 Stockholm</p>
							<p>Org. nr: 556735-4716</p>
						</section>
					</div>
				</div>
	
				<div class="right">
					<div class="slider-wrapper theme-default">
						<div class="ribbon"></div>
						<div id="slider" class="nivoSlider">
							<img src="images/projects/leafs.png" alt="" />
							<img src="images/projects/rabbit.png" alt="" />
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
					effect: 'fade,sliceDown', // Specify sets like: 'fold,fade,sliceDown'
					pauseTime: 5000, // How long each slide will show
					pauseOnHover: false, // Stop animation while hovering
				});
			});

			
		</script>
	</body>
</html>