<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
    @foreach ($product as $value )
        {{ $value }}
    @endforeach

    <br>
    @foreach ($product as $key => $value )
        {{ $key }} {{$value}}
    @endforeach

    <br> both are similar
    @forelse ($product as $value)
        {{$value}}
    @empty
     <p>No product found</p>
    @endforelse

    <br>
    @if (count($product))
        @foreach ($product as $key => $value )
        {{ $key }} {{$value}}
        @endforeach
    @else
      <p>No product found</p>
    @endif
</body>
</html>
