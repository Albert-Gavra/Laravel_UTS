@extends("layout.layout")

@section('title',' Websites')


@section('main_content')
     <div class="mx-auto w-75 d-flex flex-column justify-content-center">
     <a class="mx-auto mr-0 btn btn-success" href="/createWebsite"> Create Website </a> <br>
     <table table class="table table-striped" style="border: 5px solid #990000; border-collapse: collapse">
        <tr>
            <th> ID </th>
            <th> WEBSITES </th>
            <th> EMAIL </th>
            <th> PASSWORD </th>
            <th> OPTION </th>
        </tr>

     @foreach ($websites as $list)
     <tr>
            <td> {{ $list->id_website}} </td>
            <td> {{ $list['name_website'] }}</td>
            <td> {{ $list['email'] }}</td>
            <td> {{ $list['pass_website'] }}</td>
            <td> <a class="btn btn-danger" href="/website/edit/{{ $list->id_website }} "> Edit </a>
  <a class="btn btn-danger" href="/website/remove/{{ $list->id_website }} "> Remove </a></td>
        </tr>
     @endforeach
     </table>
     </div>
@endsection 