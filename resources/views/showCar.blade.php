<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Show Car</title>

</head>

<body>
    <h1> {{ $car->title }}</h1>
    <h5>{{ $car->created_at }}</h5>
    <h5>{{ $car->updated_at }}</h5>
    <h3>{{ $car->description}}</h3>
    <h3>{{ $car->published ? "published": "not published" }}</h3>
    <h3>{{ $car->category->cat_name}}</h3>
    
</body>

</html>