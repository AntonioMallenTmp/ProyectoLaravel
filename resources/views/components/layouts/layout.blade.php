<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    @vite("resources/css/app.css")
</head>
<body>

<x-layouts.header/>

    <nav class="h-15v bg-nav">
        <a href="" >Index</a>
        <a href="test" >Alumnos</a>
        <a href="" >Contacta</a>
        <a href="" >About</a>
    </nav>
    <hr>
    
   <main class="h-65v bg-main">
        {{ $slot }}
   </main>
</body>

<x-layouts.footer />

</html>