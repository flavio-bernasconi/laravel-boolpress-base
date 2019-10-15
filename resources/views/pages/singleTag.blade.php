@extends('template.base')


@section('content')
  <div class="row">
    <a href="{{ route('start') }}" class="mb-5"><i class="fas fa-chevron-left"></i>Back</a>
  </div>
  <div class="row">
    <div class="list-post">
      @foreach ($tag -> posts as $post)
        <div class="box pt-5 pb-5 shadow">
          <h5>{{ $post -> author}}</h5>
          <p>{{ $post -> text}}</p>
          <p>{{ $post -> id}}</p>
        </div>
      @endforeach
    </div>

  </div>


@endsection
