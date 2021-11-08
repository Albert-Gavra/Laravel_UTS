@extends("layout.layout")

@section('title',' List Website')


@section('main_content')
     <div class="mx-auto w-50 d-flex flex-column justify-content-center">
     @foreach ($email->websites as $list)
     <div class="mt-1 p-2 h-10 bg-dark text-white rounded">
        <h4>{{ $list['name_website'] }}</h4>
     </div>
     @endforeach
     </div>
@endsection 