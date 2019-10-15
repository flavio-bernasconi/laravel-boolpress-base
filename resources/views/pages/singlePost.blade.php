@extends('template.base')


@section('content')
  <div class="row justify-content-center lista">
    <div class="col-12">
      <a href="{{ URL::previous() }}" class="mb-5"><i class="fas fa-chevron-left"></i>Back</a>
    </div>
    <div class="col-3 mt-5 ">
        <div  class="dati shadow">
          <h5>id: </h5>
          <p>{{ $post -> id}}</p>
          <h5>author: </h5>
          <p>{{ $post -> author}}</p>
          <h5>created: </h5>
          <p>{{ $post -> created_at}}</p>
          <h5>category: </h5>
          {{ $post -> category_id}}
          @foreach ($categories as $category)
            @if ($post -> category_id === $category -> id )
              {{ $category -> name }}
            @endif
          @endforeach
           <h5>tags</h5>
           @foreach ($post -> tags as $tag)
             {{ $tag -> name}}
           @endforeach
        </div>
    </div>
    <div class="col-3 mt-5 ">
      <div class="dati shadow">
        <h5>text: </h5>
        <p>{{ $post -> text}}</p>
      </div>
    </div>

  </div>
  <div class="row justify-content-center ">
    <div class="col-5 mt-5 justify-content-center immagine">
      <img src="img/{{$post -> img}}" alt="" class="img-fluid shadow">
    </div>
  </div>



@endsection
