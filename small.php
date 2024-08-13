<!DOCTYPE html>
<html lang="da" data-bs-theme="dark">

<head>
	<meta name="charset" content="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Now Playing</title>
	<meta name="description" content="Now Playing ">
	<link rel="icon" href="https://jensz12.com/favicon.png">
	<meta name="theme-color" content="#A81010">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<style>
		body {
			height: 100%;
			font-family: 'Roboto', sans-serif;
			padding-top: 100px;
		}
	</style>
</head>

<body>
	<main role="main" id="content" class="container">
		<div class="row justify-content-md-center">
			<article class="col-lg-6 col-md-8 col-sm-12">
				<div class="card">
					<div class="card-body">
						<h1 class="text-center"><span id="playing"></span></h1>
					</div>
				</div>
			</article>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script>
		$(function() {
			$('[data-toggle="tooltip"]').tooltip()
		})

		function worker() {
			$.ajaxSetup({
				cache: false
			});
			$("#playing").load('playing.php');
		}
		$(function() {
			worker();
			setInterval(worker, 3000);
		});
	</script>
</body>

</html>
