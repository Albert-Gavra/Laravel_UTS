@extends("layout.layoutUser")

@section('title',' Emails')


@section('main_content')
<div class="mx-auto w-75 d-flex flex-column justify-content-center">
     <a class="mx-auto mr-0 btn btn-success" href="/createEmail"> Create Email </a> <br>
     <table table class="table table-striped" style="border: 5px solid #990000; border-collapse: collapse">
        <tr>
            <th> NO </th>
            <th> EMAIL </th>
        </tr>

     @foreach ($emails as $list)
     <tr>
            <td> {{ $no = $no + 1}} </td>
            <td> <a href="/email/{{ $list->name_email }}">{{ $list['name_email'] }}</a> </td>
        </tr>
     @endforeach
     </table>
     </div>
@endsection 