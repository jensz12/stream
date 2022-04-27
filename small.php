<?php
$playing = file_get_contents('https://jensz12.com/playing.php');
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta name="charset" content="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Now Playing</title>
<meta name="description" content="Now Playing ">
<link rel="icon" href="https://jensz12.com/favicon.png">
<meta name="theme-color" content="#A81010">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-dark.min.css" integrity="sha256-ieo/1m9y+1GF2wb20E00j0CTD42N7enNWThlTLjuflg=" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<style>
body {
	height: 100%;
	font-family: 'Roboto', sans-serif;
	padding-top: 100px;
}
.card-title, h1, h2, h3, h4, h5, p, b, card-text {
  color: white;
}.card {
  background-color: #212121;
  margin-bottom: 20px;
  margin-top: 20px;
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
$(function () { $('[data-toggle="tooltip"]').tooltip() })
function worker(){
	$.ajaxSetup ({
		cache: false
	});
	$("#playing").load('playing.php');
}
$(function(){
	worker();
	setInterval(worker, 3000);
});
</script>
</body>
</html>
