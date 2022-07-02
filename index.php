<?php
	$fs_name = empty($_GET['fs']) ? 'Gdynia' : trim(htmlspecialchars($_GET['fs']));
	$fs_inject = explode(' ', $fs_name);
	$fs_inject = '<div>' . implode('</div><div>', $fs_inject) . '</div>';
?>
<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="extras/FS-icon.png">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>FS selfie - <?=$fs_name?></title>
</head>
<body>
<!--
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gemunu Libre">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Racing Sans One">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Condensed">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Staatliches">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Stick No Bills">
-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Paytone One">

<style>
body {
	background: black;
	
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
main {
	margin: 20px;
	text-align: center;
}

@media screen and (min-width: 920px) {
	main {
		margin: 20px auto;
	}
}

main {
	font-family: Paytone One, Anton;
	font-size: 18vw;
	color: white;
}
/*
	font-size: 15vw;
	font-weight: bold;
	max-width: 100vw;
*/
.text {
	overflow-wrap: normal;
}
img {
	max-width: 900px;
	width: 100%;
	box-sizing: border-box;
	padding-top: 1rem;
}
img.logo {
	filter: grayscale() invert(100%) contrast(3);
}

/* full screen button (not to visible on the photo) */
.non-photo-btn {
	display: block;
	background-color: transparent;
	border-color: transparent;
	width: 100%;
	box-sizing: border-box;
	padding: 1em;

	color:#eee;
	text-align: center;
	font-size: 20pt
}

.non-photo-btn {
	opacity: 1;
	transition: opacity 3s;
}
body.loaded .non-photo-btn {
	opacity: .05;
}

</style>

<main>
<!--
	<br>eccenux
	<br>osobliwość
-->
<div class="text" contenteditable spellcheck="false">
	<?=$fs_inject?> <span id="date_auto">2022</span>
</div>
<script>
window.onload = function() {
	document.body.className += " loaded";
}
</script>
<script>
	(function() {
		var options = { year: 'numeric', month: 'numeric'};
		var dateTimeFormat = new Intl.DateTimeFormat('pl-PL', options);
		document.querySelector('#date_auto').innerHTML = dateTimeFormat.format();
	})()
</script>
<div>
	<img class="logo" src="extras/FS-logo.png"
	/>
</div>
<button class="non-photo-btn"
	onclick="document.fullscreenElement!=null ? document.exitFullscreen() : document.body.requestFullscreen()" 
>
	<div>pełny ekran</div>
	<div>full screen</div>
</button>
<!--
<div>
	<img class="logo_" src="extras/FS-logo-globe.png"
		onclick="document.body.requestFullscreen()"
	/>
</div>
-->
</main>

<script src="resizer.js?2116"></script>
<script src="resize_prepare.js?2141"></script>

<!--
	Source:
	https://github.com/Eccenux/ingress-fs-show
-->

</body>
</html>