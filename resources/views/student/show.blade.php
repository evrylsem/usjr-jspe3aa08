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
            <td>First Name:</td>
            <td>{{ $students->studfirstname }}</td>
        </tr>
        <tr>
            <td>Middle Name:</td>
            <td>{{ $students->studmidname }}</td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td>{{ $students->studlastname }}</td>
        </tr>
        <tr>
            <td>College:</td>
            <td>{{ $students->colleges->collfullname }}</td>
        </tr>
        <tr>
            <td>Year:</td>
            <td>{{ $students->studyear }}</td>
        </tr>
    </table>

    <a href="{{ route('student.index') }}">Back to Students List</a>
</body>
</html>
