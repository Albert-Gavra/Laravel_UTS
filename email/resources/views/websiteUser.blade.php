@extends("layout.layoutUser")

@section('title',' Websites')


@section('main_content')
     <div class="mx-auto w-75 d-flex flex-column justify-content-center">
     <a class="mx-auto mr-0 btn btn-success" href="/createWebsite"> Create Website </a> <br>
     <table table class="table table-striped" style="border: 5px solid #990000; border-collapse: collapse">
        <tr>
            <th> NO </th>
            <th> WEBSITES </th>
        </tr>

     @foreach ($websites as $list)
        <tr>
            <td> {{ $no = $no + 1}} </td>
            <td> {{ $list['name_website'] }}</td>
        </tr>
     @endforeach
     </table>
     </div>
@endsection 