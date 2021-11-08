@extends("layout.layout")

@section('title',' Emails')


@section('main_content')
<form action="/email/create/store" method="POST">
    {{ csrf_field() }}
    <label> Email : </label>
    <input type="text" name="email">
    <input type="submit" value="Submit">
</form>
@endsection 