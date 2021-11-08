@extends("layout.layout")

@section('title',' Emails')


@section('main_content')
<form action="/website/update/{{$website->id_website}}" method="POST">
    {{ csrf_field() }}
    <label> New Name Website : </label>
    <input type="text" name="website" value="{{$website->name_website}}"><br>
    <label> New Link with email : </label>
    <select name="link_email" class="custom-select"><br>
    @foreach ($emails as $list )
    <option value="{{ $list->name_email}}">{{ $list->name_email}}</option>
    @endforeach
    </select><br>
    <label> New Password for website : </label>
    <input type="text" name="password" value="{{$website->pass_website}}"><br>
    <input type="submit" value="Submit">
</form>
@endsection 