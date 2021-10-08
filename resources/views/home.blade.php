<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Questi sono i nostri viaggi</h1>
    @forelse ($travels as $travel)
        <div><b>Destinazione: </b> {{$travel->destination}}</div>
        <div><b>Prezzo: </b> {{ number_format($travel->price, 2, ",", "") . " €" }} </div>
        <br>
    @empty
        <div>Non ci sono viaggi al momento</div>
    @endforelse
</body>
</html>