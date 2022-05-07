﻿<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="extras/FS-icon.png">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>FS Gdynia</title>
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
</style>

<main>
<!--
	<br>eccenux
	<br>osobliwość
-->
<div class="text" contenteditable spellcheck="false">
	Gdynia <span id="date_auto">2022</span>
</div>
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
<div
	onclick="document.fullscreenElement!=null ? document.exitFullscreen() : document.body.requestFullscreen()" 
	style="color:#111; text-align: center; font-size: 20pt"
>
	<div>pełny ekran</div>
	<div>full screen</div>
</div>
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