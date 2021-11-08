@extends("layout.layout")

@section('title',' Emails')


@section('main_content')
<div class="mx-auto w-75 d-flex flex-column justify-content-center">
     <a class="mx-auto mr-0 btn btn-success" href="/createEmail"> Create Email </a> <br>
     <table table class="table table-striped" style="border: 5px solid #990000; border-collapse: collapse">
        <tr>
            <th> ID </th>
            <th> EMAIL </th>
            <th> OPTION </th>
        </tr>

     @foreach ($emails as $list)
     <tr>
            <td> {{ $list->id_email}} </td>
            <td> <a href="/email/{{ $list->name_email }}">{{ $list['name_email'] }}</a> </td>
            <td> <a class="btn btn-danger" href="/email/remove/{{ $list->id_email }} "> Remove </a>
            </td>
        </tr>
     @endforeach
     </table>
     </div>
@endsection 