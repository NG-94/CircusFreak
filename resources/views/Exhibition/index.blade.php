<x-layout>
<h1>Välkommen till utställningen</h1>
<div class="container">
<button onclick="switchBackgroundAudio()" class="btn btn-primary">Stäng av/slå på bakgrundsljudet</button>
<p>
Välj den tavla du vill se.
</p>

<audio id="crowd">
  <source src="../audio/crowd2h.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
<audio id="music">
  <source src="../audio/music1.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
<audio id="desc">
  <source src="../audio/desc1.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
<ul title="Tavlor" class="list-group">
<li>
<button onclick="switchPictures(1)" >Tavla 1</button>
</li>
<li>
<button onclick="switchPictures(2)" >Tavla 2</button>
</li>
<li>
<button onclick="switchPictures(3)" >Tavla 3</button>
</li>
<li style="position: absolute; left: 300px;">
<button onclick="switchPictures(4)" >Tavla 4</button>

</li>
<li style="position: absolute; left: 300px; top: 212px;">
<button onclick="switchPictures(5)" >Tavla 5</button>
</li>
<li style="position: absolute; left: 300px; top: 242px">
<button onclick="switchPictures(6)">Tavla 6</button>
</li>
</ul>
<img style="position: absolute; left: 700px;" id="picture" src="../images/picture1.jpg" alt="Nu visas: Tavla 1" class="img-fluid">
<button style="position: absolute; top: 290px;" onclick="descPlay()">Hör konstnären berätta om/syntolka aktuell tavla</button>
</div>
<footer style="position: relative; left: 200px; top: 150px"">
  <div style="position: relative; top: 190px; font-size: large;">
Circus Freak är sponsrat av Synskadades Vänner Skaraborg.
</div>
<img style="position: relative; top: 200px;" src="../images/logo.jpg" alt="Logotyp för Synskadades Vänner Skaraborg">



</footer>

<script>
window.onload = function()
{
	var crowd = document.getElementById("crowd");
	crowd.play();
}
function switchBackgroundAudio()
{
	var crowd = document.getElementById("crowd");
	if(crowd.muted == true)
	{
		crowd.muted = false;
	}
	else
	{
		crowd.muted = true;
	}
		}
</script>
</x-layout>