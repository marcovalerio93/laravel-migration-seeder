<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>train list</title>
</head>
<body>

    <ul>
        @foreach ($trains as $train)
        <li>{{$train->company}} - {{$train->departure_station}} - {{$train->arrival_station}} - {{$train->departure_time}} - {{$train->arrival_time}} -</li>
        @endforeach
    </ul>
    
</body>
</html>