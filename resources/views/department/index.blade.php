<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <table>
        <thead>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Middle Name</td>
            <!-- <td>Program</td> -->
            <td>College</td>
            <td>Year</td>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->studfirstname}}</td>
                    <td>{{$student->studlastname}}</td>
                    <td>{{$student->studmidname}}</td>
                    <!-- <td>{{$student->studprogid}}</td> -->
                    <td>{{$student->colleges->collfullname}}</td>
                    <td>{{$student->studyear}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
