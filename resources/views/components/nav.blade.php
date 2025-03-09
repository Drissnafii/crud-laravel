<!DOCTYPE html>
<html>
<head>
    <title>Styled Navigation</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

    <nav class="w3-bar w3-black w3-center">
        <a href="/" class="w3-bar-item w3-button">Accueil</a>
        <a href="{{route('profiles.index')}}" class="w3-bar-item w3-button">Profiles</a>
        <a href="/info" class="w3-bar-item w3-button">About</a>
    </nav>

</body>
</html>
