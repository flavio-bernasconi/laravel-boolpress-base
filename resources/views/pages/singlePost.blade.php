@extends('template.base')


@section('content')
  <div class="row">
    <div class="col-12">
      <a href="{{ URL::previous() }}" class="mb-5">Back</a>
    </div>
    <div class="col-6 mt-5">
      <ul class="list-group">
        <li  class="list-group-item">
          <span>id: </span>
          {{ $post -> id}}
        </li>
        <li class="list-group-item">
          <span>text: </span>
          {{ $post -> text}}
        </li>
        <li class="list-group-item">
          <span>author: </span>
          {{ $post -> author}}
        </li>
        <li class="list-group-item">
          <span>created: </span>
          {{ $post -> created_at}}
        </li>
      </ul>
    </div>

  </div>



@endsection
