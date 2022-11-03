<x-layout>
<div style="position: relative; font-size: large; left: 375px;">
<h1 class="display-1">Gästbok</h1>
<p class="info">
Har du några tankar om utställningen?
<br>
<a href="{{ route('post.create') }}">Skriv ett inlägg i vår gästbok</a>
<br>
Eller se vad andra har skrivit nedan.
</p>
@foreach($allPosts as $post)
<h2>{{ $post->name }}</h2>
<h6>{{ $post->created_at }}</h6>
<p>
{!! nl2br(e($post->post)) !!}

</p>
@endforeach
</div>
<footer style="position: relative; left: 200px; top: -110px"">
  <div style="position: relative; top: 190px; font-size: large;">
Circus Freak är sponsrat av Synskadades Vänner Skaraborg.
</div>
<img style="position: relative; top: 200px;" src="../images/logo.jpg" alt="Logotyp för Synskadades Vänner Skaraborg">



</footer>

</x-layout>
