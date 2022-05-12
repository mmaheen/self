@extends('layout.header')
@section('content')

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student List</title>
    </head>
    <body>
        <table class = "table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th>Class</th>
            </tr>
            <tr>
                @foreach ($s as $s)
                    <tr>
                        <td>{{$s->id}}</td>
                        <td><a href="{{route('student.details',['id'=>$s->id])}}">{{$s->name}}</a></td>
                        <td>{{$s->username}}</td>
                        <td>{{$s->email}}</td>
                        <td>{{$s->phone}}</td>
                        <td>{{$s->dob}}</td>
                        <td>{{$s->age}}</td>
                        <td>{{$s->class->name}}</td>
                    </tr>
                @endforeach
            </tr>
        </table>
    </body>
    </html>

@endsection