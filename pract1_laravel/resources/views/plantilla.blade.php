<!DOCTYPE html>
<html lang="en">
<head>
    <title>Festicortos</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav>@include("partials.nav")</nav>
    <div class="flex flex-row flex-wrap">
        @yield("contenido")
    </div>
</body>
<footer class="text-center mt-20 text-3xl font-bold align-bottom">
    2 DAW
</footer>
</html>