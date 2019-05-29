<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL CARS</title>
</head>
<body>
    <h1>ALL CARS</h1>

    <a href="cars/create"><button>CREATE A CAR</button></a>

    <ul>

    @foreach($cars as $car)

    <li>

    <a href="/cars/{{$car->id}}/edit">

        {{$car->brand}}

        </a>

    </li>

    @endforeach

    </ul>

</body>
</html>