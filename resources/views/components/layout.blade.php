<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The People's Posts</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar /><br>
    <div style="margin-left:35%;margin-right:35%">
        {{ $slot }}
    </div>
</body>

</html>
