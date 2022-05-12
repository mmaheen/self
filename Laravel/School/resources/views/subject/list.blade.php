@extends('layout.header')
@section('content')

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subjects</title>
    </head>
    <body>
        <table class = "table">
            <tr>
                <th>Name</th>
            </tr>

            <tr>
                @foreach ($s as $s)
                    <tr>
                        <td>
                            <a href="{{route('subject.details',['id'=>$s->id])}}">{{$s->name}}</a>
                        </td>
                    </tr>
                @endforeach
            </tr>
        </table>
    </body>
    </html>

@endsection