@extends('layout.header')
@section('content')

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subject Details</title>
    </head>
    <body>
        ID : {{$s->id}}<br>
        Name : {{$s->name}}<br>
        User Name : {{$s->username}}<br>
        Email : {{$s->email}} <br>
        Phone : {{$s->phone}} <br>
        Date of Birth : {{$s->dob}} <br>
        Student Age : {{$s->age}} <br>
        <br>
        Class : {{$s->class->name}}<br>
        Subjects : 
        @foreach($s->class->subject as $s)
        <br>
            {{$s->name}} Teacher : {{$s->teacher->name}}
        @endforeach
    </body>
    </html>

@endsection