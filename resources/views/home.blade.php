<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <h1>This is the home page</h1>
    <h1>This is the home page</h1>
    <h1>This is the home page</h1>
    <h2><?= $name . "<br>" . $lastName . " is studing a loooot of laguages like: " . implode($separator = ', ', $laguages)  ;  ?></h2>

    <h3><?php
        echo "Here Where Gonna despalay in a list Uising the foreach: ";
    ?></h3>

            @unless (count($laguages) > 0 )
            <p>Pas de Cours Pour l'instant !</p>
            @else
            @php
                 $z = ($y + $x) / $f
            @endphp
            <h1>{{$z}}</h1>
            <tr>
                <th>Coures: </th>
            </tr>
            @foreach ($laguages as $key => $laguage)
            <tr>
                <td>{{$laguage}}</td>
            </tr>
            @endforeach
            @endunless

            @switch($color)
                @case("red")
                    <p>ces une couleur {{$color}}</p>
                    @break
                @case("blanc")
                    <p>ces une couleur {{$color}}</p>
                    @break
                @default
                <h4>This color -> {{$color}},Is not a choice</h4>
            @endswitch




</body>
</html>
