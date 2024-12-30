<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Number-CounteUp</title>
</head>
<body>
	<h1>Count Up To Any Number With Smooth Animation In JavaScript – </h1>
	<h2 class="count" data-target="12345">0</h2>
	<script type="text/javascript">
		const counts = document.querySelectorAll(".count");
		const speed = 397;
		counts.forEach((count) => {
			function upDate() {
				const target = Number(count.getAttribute("data-target"));
				const counter = Number(count.innerText);
				const inc = target / speed;
				if (counter < target) {
					count.innerText = Math.floor(inc + counter);
					setTimeout(upDate, 15);
				} else {
					count.innerText = target;
				}
			}
			upDate();
		});
	</script>
</body>
</html>