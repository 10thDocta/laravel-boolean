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
        @foreach ($students as $student)
            <li>{{$student->name}}</li>
            <li>{{$student->lastname}}</li>
            <li>{{$student->gender}}</li>
            <li>{{$student->date_of_birth}}</li>
        @endforeach
</ul>

</body>
</html>