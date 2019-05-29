<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT CAR</title>
</head>
<body>
    <h1>EDIT CAR</h1>

    <form method="POST" action="/cars/{{$car->id}}">
    @csrf
    @method("PATCH")
        <div>
            <input type="text" name="brand" value="{{$car->brand}}">
        </div>
        <div>
            <input type="text" name="year" value="{{$car->year}}">
        </div>
        <div>
            <button type="submit">EDIT CAR</button>
        </div>
    </form>
    <form method="POST" action="/cars/{{$car->id}}">
        @csrf
        @method("DELETE")
        <div>
            <button type="submit">DELETE CAR</button>
        </div>
    </form>
</body>
</html>