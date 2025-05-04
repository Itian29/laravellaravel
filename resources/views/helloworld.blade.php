<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!--
    <p>Hello world</p>

    @foreach ($section as $sec)
        <p>{{ $sec }}</p>
    @endforeach
    -->
    <form action="/add-student" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <input type="number" name="age">

        <button type="submit">Submit</button>

    </form>
</body>
</html>
