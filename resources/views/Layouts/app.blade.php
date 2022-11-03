<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<title>Circus Freak</title>

</head>
<body>
                <header>
<div class="container">        
                {{ $header }}
        </div>
        </header>
{{ $slot }}
</body>
</html>