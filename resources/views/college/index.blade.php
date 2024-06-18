<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colleges</title>
</head>
<body>
    <table>
        <thead>
            <td>College Initials</td>
            <td>College Name</td>
            <td></td>
        </thead>
        <tbody>
            @foreach ($colleges as $college)
            <tr>
                <td>{{$college->collshortname}}</td>
                <td>{{$college->collfullname}}</td>
                <td><a href="">Expand</a></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</body>
</html>