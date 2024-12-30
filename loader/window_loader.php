<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>jquery page loader</title>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<style>
		#global-loader {
			position: fixed;
			z-index: 50000;
			background: white;
			left: 0;
			top: 0;
			right: 0;
			bottom: 0;
			height: 100%;
			width: 100%;
			margin: 0 auto;
			text-align: center;
		}

		.loader-img {
			position: absolute;
			right: 0;
			bottom: 0;
			top: 43%;
			left: 0;
			margin: 0 auto;
			text-align: center;
		}

	</style>
</head>
<body>
	<div id="global-loader" class="light-loader">
		<img src="/loader/loader.svg" class="loader-img" alt="Loader">
	</div>
	<script>
		$(document).ready(function () {
        // loader 
        // $("#global-loader").fadeOut("slow");

			$('#global-loader').fadeIn();

        // Hide the loader when the page is fully loaded
			$(window).on('load', function() {
				$('#global-loader').fadeOut('slow');
			});
		});


	</script>
</body>
</html>