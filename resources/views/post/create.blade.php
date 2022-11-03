<x-layout>
<div style="position: relative; left: 200px;">
    <h1 class="display-1">Skriv inlägg</h1>
@if($errors->any())
<div class="alert alert-danger" role="alert">
Du har inte skrivit något i fältet för inlägg.
</div>
@endif
<form action="{{ route('post.store') }}" method="post">
@csrf
<div class="form-group" style="width: 50%;">
<label style="font-size: 15px;" for="Name">Namn (frivvilligt):</label>
<input class="form-control" type="text" name="name" value=" {{ old('name') }}">
</div>
<div class="form-group" style="width: 50%;">
<label style="font-size: 15px;" for="post">Ditt inlägg:</label>
<textarea class="form-control" name="post"></textarea>
</div>
<input class="btn btn-primary" type="submit" value="Lägg upp">
</form> 
</div>
<footer style="position: relative; left: 200px; top: -20px"">
  <div style="position: relative; top: 190px; font-size: large;">
Circus Freak är sponsrat av Synskadades Vänner Skaraborg.
</div>
<img style="position: relative; top: 200px;" src="../images/logo.jpg" alt="Logotyp för Synskadades Vänner Skaraborg">



</footer>

</x-layout>
