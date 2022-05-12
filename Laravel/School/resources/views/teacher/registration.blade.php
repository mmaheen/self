@extends('layout.header')
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Registration</title>
</head>
<body>
    <h3>Teacher Registration </h3>
    <form action="{{route('registration.teacher')}}" method = "post">
        <table>
            {{csrf_field()}}
            <tr><td>Name : </td><td><input type="text" name = "name" value = "{{old('name')}}" placeholder = "Name"></td>
            <td>@error('name') <span class = "text-danger">{{$message}}</span>@enderror</td></tr>
            
            <tr><td>User Name : </td><td><input type="text" name = "username" value = "{{old('username')}}"  placeholder = "User Name"></td>
            <td>@error('username') <span class = "text-danger">{{$message}}</span>@enderror</td></tr>
            
            <tr><td>Email : </td><td><input type="text" name = "email" value = "{{old('email')}}"  placeholder = "Email"></td>
            <td>@error('email') <span class = "text-danger">{{$message}}</span>@enderror</td></tr>

            <tr><td>Phone : </td><td><input type="text" name = "phone" value = "{{old('phone')}}"  placeholder = "Phone Number"></td>
            <td>@error('phone') <span class = "text-danger">{{$message}}</span>@enderror</td></tr>

            <tr><td>Date of Birth : </td><td><input type="date" name = "dob" value = "{{old('dob')}}" ></td>
            <td>@error('dob') <span class = "text-danger">{{$message}}</span>@enderror</td></tr>

            <tr><td>Salary : </td><td><input type="text" name = "salary" value = "{{old('salary')}}"  placeholder = "Shouldn't be free"></td>
            <td>@error('salary') <span class = "text-danger">{{$message}}</span>@enderror</td></tr>

            <tr><td>Password: </td><td><input type="password" name = "password" placeholder = "New Password"></td>
            <td>@error('password') <span class = "text-danger">{{$message}}</span>@enderror</td></tr>

            <tr><td>Confirm Password: </td><td><input type="password" name = "confirm_password" placeholder = "Confirm your Password"></td>
            <td>@error('confirm_password') <span class = "text-danger">{{$message}}</span>@enderror</td></tr>
            <tr><td></td><td><input type="submit" class = "btn btn-primary" value = "Register now"></td></tr>
        </table>
    </form>
</body>
</html>

@endsection