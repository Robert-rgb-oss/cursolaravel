<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $user->name }} Phones:</h1>
    <ul>
        @foreach ($user->phone as $phone)
        <li>{{ $phone->prefix }} {{ $phone->phone_number }}</li>
        @endforeach
</body>
</html>