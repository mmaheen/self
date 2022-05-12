@extends('layout.header')
@section('content')

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form action="{{route('login')}}" method = "post">
            {{csrf_field()}}
            <table>
                <tr><td>Username : </td><td><input type="text" name = "username" value = "{{old('username')}}" placeholder = "Username"></td>
                <td>@error('username') <span class = "text-danger">{{$message}}</span>@enderror</td></tr>
                <tr><td>Password : </td><td><input type="password" name = "password" placeholder = "Password"></td>
                <td>@error('password') <span class = "text-danger">{{$message}}</span>@enderror</td></tr>
                <tr><td></td><td><input type="submit" class = "btn btn-primary" value = "login"></td></tr>
            </table>
        </form>
    </body>
    </html>

@endsection