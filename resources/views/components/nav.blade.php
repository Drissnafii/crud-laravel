<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Navigation</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .custom-nav {
            padding: 10px 0;
        }
        .custom-nav a {
            margin: 0 10px;
            text-transform: uppercase;
            font-weight: bold;
        }
        .custom-nav a:hover {
            background-color: #555;
            color: white;
        }
    </style>
</head>
<body>

    <nav class="w3-bar w3-black w3-center custom-nav">
        <a href="/" class="w3-bar-item w3-button">Accueil</a>
        <a href="{{ route('profiles.index') }}" class="w3-bar-item w3-button">Profiles</a>
        <a href="/info" class="w3-bar-item w3-button">About</a>
        <a href="/profile/create" class="w3-bar-item w3-button">New Profile</a>
    </nav>

</body>
</html>
