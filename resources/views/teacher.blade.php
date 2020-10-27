<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>
        @foreach ($teachers as $teacher)
        <li>{{$teacher->name}}</li>
        <li>{{$teacher->lastname}}</li>
        <li>{{$teacher->gender}}</li>
        <li>{{$teacher->date_of_birth}}</li>
        <br>
        @endforeach
    </ul>
    
</body>
</html>