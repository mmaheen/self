@extends('layout.header')
@section('content')

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exam Form</title>
    </head>
    <body>
        <form action="{{route('result.form',['id'=>$id])}}" method = "post">
            {{csrf_field()}}
            <table>
                <tr><td>Subject</td><td><select name="subject_id" id=""><option selected disabled>Subject</option>@foreach($su as $i)<option value="{{$i->id}}">{{$i->name}}</option>@endforeach</select></td>
                <td>@error('subject_id')<span class = "text-danger">{{$message}}</span>@enderror</td></tr>
                
                

                <tr><td>Atteded Student</td><td>@foreach($st as $i)<input type="checkbox" name = "student_id" value = "{{$i->id}}">{{$i->name}}@endforeach</td>
                <td>@error('student_id')<span class = "text-danger">{{$message}}</span>@enderror</td></tr>
                <tr><td></td><td><input type="Submit" value = "Save"></td></tr>
            </table>
        </form>
    </body>
    </html>

@endsection