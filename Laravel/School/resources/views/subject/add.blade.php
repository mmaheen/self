@extends('layout.header')
@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Subject</title>
    </head>
    <body>
        <form action="{{route('subject.add')}}" method = "post">
            {{csrf_field()}}
            <table>
                <tr><td>Name : </td><td><input type="text" name = "name" placeholder= "Subject Name" value = "{{old('name')}}"></td>
                <td>@error('name')<span class = "text-danger">{{$message}}</span>@enderror</td></tr>
                <tr>
                    <td>
                        For Class : 
                    </td>
                    <td>
                        <select name="class" id="">
                            <option value="" selected disabled>Class</option>
                            @foreach ($c as $i)
                                <option value = "{{$i->id}}">{{$i->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        Assign Teacher : 
                    </td>
                    <td>
                        <select name="teacher" id="">
                            <option value="" selected disabled>Teacher</option>
                            @foreach ($t as $i)
                                <option value = "{{$i->id}}">{{$i->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr><td></td><td><input type="submit" class = "btn btn-primary" value = "Add"></td></tr>
            </table>
        </form>
    </body>
    </html>
@endsection