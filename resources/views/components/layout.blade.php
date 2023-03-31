<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="/media/logo.ico" type="image/ICO">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet">

    <title>Progetto Gruppo 04</title>
@livewireStyles
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <x-navbar />

<div class="min-vh-100">
    {{$slot}}
</div>

    <x-footer />

@livewireScripts
<script src="https://kit.fontawesome.com/a1bce7f071.js" crossorigin="anonymous"></script>
</body>
</html>