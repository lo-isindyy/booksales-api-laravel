<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang!</title>
</head>
<body>
    <h1>Hello World!</h1>
    <p>Selamat datang di halaman genre</p>

    @foreach ($genres as $item)
        <ul>
            <li>{{ $item['name'] }}</li>
            <li>{{ $item['description'] }}</li>
        </ul>
    @endforeach
</body>
</html>