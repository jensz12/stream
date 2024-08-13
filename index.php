<!DOCTYPE html>
<html lang="da" data-bs-theme="dark">
<head>
<meta name="charset" content="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Stream - Jens Møller</title>
<meta name="description" content="Stream">
<link rel="icon" href="https://jensz12.com/favicon.png">
<meta name="theme-color" content="#A81010">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jensz12">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Stream - Jens Møller">
<meta name="twitter:description" content="Stream">
<meta name="twitter:image:src" content="https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="image_src" href="/https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
<style>
body {
	background-image: url(https://design.jensz12.com/images/screen-back.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	background-attachment: fixed;
	height: 100%;
	font-family: 'Roboto', sans-serif;
	padding-top: 35px;
	padding-bottom: 35px;
}
</style>
</head>
<body>
<main role="main" id="content" class="container">
	<article>
		<div class="row">
    		<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="card-body">
					<div id="twitch-embed"></div>
						<script src="https://embed.twitch.tv/embed/v1.js"></script>
						<script type="text/javascript">
						new Twitch.Embed("twitch-embed", {
						width: "100%",
						height: 500,
						theme: "dark",
						channel: "jensz12"
						});
						</script>
					</div>
					</div>
				</div>
			</div>
		</div>
	</article>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
$(function () { $('[data-toggle="tooltip"]').tooltip() })
</script>
</body>
</html>
