<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        a {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <a style="text-decoration: none" href="/insert">Create new</a>
       
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>
            <a href="{{ url('/edit/'.$user->id) }}">Edit |</a>
            <a href="{{ url('/delete/'.$user->id) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>