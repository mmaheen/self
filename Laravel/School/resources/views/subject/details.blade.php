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
        Class : {{$s->class->name}}<br>
        Teacher : {{$s->teacher->name}}<br>
    </body>
    </html>

@endsection