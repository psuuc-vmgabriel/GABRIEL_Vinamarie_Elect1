<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h2>Edit Student</h2>

    <form action="{{ url('/update/'.$user->id) }}" method="POST">
        @csrf
        <label for="stud_name">Name:</label>
        <input type="text" id="stud_name" name="stud_name" value="{{ $user->name }}" required>
        <button type="submit">Update</button>
    </form>

</body>
</html>
