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

    <table>
        @foreach ($students as $student)
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>{{ $student->student_name }}</td>
            <td>{{ $student->age }}</td>
            <td><a href="/delete-student/{{ $student->id }}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    <form action="/add-student" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <input type="number" name="age">

        <button type="submit">Submit</button>

    </form>
</body>
</html>
