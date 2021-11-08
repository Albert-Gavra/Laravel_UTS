@extends("layout.layout")

@section('title',' Emails')


@section('main_content')
<form action="/website/create/store" method="POST">
    {{ csrf_field() }}
    <label> Website : </label>
    <input type="text" name="website"><br>
    <label> Link with email : </label>
    <select name="link_email" class="custom-select"><br>
    @foreach ($emails as $list )
    <option value="{{ $list->name_email}}">{{ $list->name_email}}</option>
    @endforeach
    </select><br>
    <label> Password for website : </label>
    <input type="text" name="password"><br>
    <input type="submit" value="Submit">
</form>
@endsection 