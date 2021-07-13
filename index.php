<!DOCTYPE html>
<html lang="da">
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
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
.card-title, h1, h2, h3, h4, h5, p, b, card-text, a:link, .fa-envelope, a:visited, th, tr {
    color: white;
  }
  .jumbotron {
    background-color: #212121;
  }
</style>
</head>
<body>
<main role="main" id="content" class="container">
	<article>
		<div class="row">
    		<div class="col-lg-12 col-md-12">
				<div class="jumbotron">
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
	</article>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
$(function () { $('[data-toggle="tooltip"]').tooltip() })
</script>
</body>
</html>
