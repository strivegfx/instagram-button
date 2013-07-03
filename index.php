<!DOCTYPE>

<html>

	<head>

		<title>Instagram Button</title>

		<link rel="stylesheet" href="css/main.css">

	</head>

	<body>

		<div class="wrapper clear-fix">

			<!--<a class="instagram-button"></a>-->

		</div>

		<script src="js/jquery-1.8.3.min.js"></script>

		<script>

			// create a stack of buttons

			(function(){

				var $html = '',
					$i = null;

				for($i = 0; $i < 10; $i++){

					$html += '<a class="instagram-button" style="background-image: url(http://placekitten.com/200/200)"></a>';

				}

				$('.wrapper').html($html);

			})();

		</script>

	</body>

</html>