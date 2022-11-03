<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Scripts -->



<title>Circus Freak</title>
<style>
body {
	 background-image: url('../images/bakgrund.jpg');
color: white;
}
</style>
</head>
    <body class="font-sans antialiased bg-light">

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">Circus Freak</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home.index') }}">Hem</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('exhibition.index') }}">Till utställningen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home.about') }}">Om oss</a>
</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('post.index') }}">Gästbok</a>
</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home.contact') }}">Kontakta oss</a>
</li>
</ul>
</div>
</nav>

{{ $slot }}

        <script src="{{ mix('js/app.js') }}"></script>
<script>
function switchPictures(chosenPicture)
{
var music = document.getElementById("music");
var picture = document.getElementById("picture");
var desc = document.getElementById("desc");
switch(chosenPicture)
{
case 1:
music.pause();
desc.pause();
music.src = "../audio/music1.mp3";
		picture.src = "../images/picture1.jpg";
picture.alt = "Nu visas: Tavla 1";
		desc.src = "../audio/desc1.mp3";

		music.play();
		
		break;
case 2:
	music.pause();
	desc.pause();
	music.src = "../audio/music2.mp3";
			picture.src = "../images/picture2.jpg";
			picture.alt = "Nu visas: Tavla 2";
			desc.src = "../audio/desc2.mp3";
			music.play();
		break;
case 3:
	music.pause();
	desc.pause();

	music.src = "../audio/music3.mp3";
			picture.src = "../images/picture3.jpg";
			picture.alt = "Nu visas: Tavla 3";
			desc.src = "../audio/desc3.mp3";
			music.play();
	break;
case 4:
	music.pause();
	desc.pause();

	music.src = "../audio/music4.mp3";
			picture.src = "../images/picture4.jpg";
			picture.alt = "Nu visas: Tavla 5";
			desc.src = "../audio/desc4.mp3";
			music.play();
	break;
case 5:
	music.pause();
	desc.pause();
	music.src = "../audio/music5.mp3";
			picture.src = "../images/picture5.jpg";
			picture.alt = "Nu visas: Tavla 5";
			desc.src = "../audio/desc5.mp3";
			music.play();
	break;
case 6:
	music.pause();
	desc.pause();

	music.src = "../audio/music6.mp3";
			picture.src = "../images/picture6.jpg";
			picture.alt = "Nu visas: Tavla 6";
			desc.src = "../audio/desc6.mp3";
			music.play();
	break;
}
}
function descPlay()
{
	var desc = document.getElementById("desc");
	desc.play();
	
}
</script>
</body>
</html>