@extends("layout.layout")

@section('title',' Emails')


@section('main_content')
    <form method="POST" action="check">
       @csrf
       Username <input type="text" name="username"><br>
       Password <input type="password" name="pass"><br><br>
       <input type="submit" value="Login">
    </form>
@endsection 