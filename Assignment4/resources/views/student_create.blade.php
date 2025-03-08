<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">

    <form action="/create" method="post">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="stud_name" id=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Add Student">
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>