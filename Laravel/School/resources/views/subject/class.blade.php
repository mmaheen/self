@extends('layout.header')
@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Class Subject</title>
    </head>
    <body>
        <table class = "table">
            <tr>
                <th>Class Name</th>
            </tr>
            <tr>
                @foreach($c as $i)
                    <tr>
                        <td><a href="{{route('subject.list',['id'=>$i->id])}}"> {{$i->name}}</a></td>
                    </tr>
                @endforeach
            </tr>
        </table>
    </body>
    </html>
@endsection