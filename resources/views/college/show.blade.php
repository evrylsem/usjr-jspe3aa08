<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
<table>
        <tr>
            <td>College Full Name:</td>
            <td>{{ $colleges->collfullname }}</td>
        </tr>
        <tr>
            <td>College Short Name:</td>
            <td>{{ $colleges->collshortname }}</td>
        </tr>
    </table>

    <a href="{{ route('college.index') }}">Back to College List</a>
</body>
</html>
