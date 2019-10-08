@extends('template.base')


@section('content')
  <div class="row justify-content-center">
    <div class="col-12">
      <a href="{{ URL::previous() }}" class="mb-5">Back</a>
    </div>
    <div class="col-7 mt-5 lista">
        <div  class="dati ">
          <h5>id: </h5>
          <p>{{ $post -> id}}</p>
        </div>
        <div class="dati">
          <h5>author: </h5>
          <p>{{ $post -> author}}</p>
        </div>
        <div class="dati">
          <h5>created: </h5>
          <p>{{ $post -> created_at}}</p>
        </div>
        <div class="dati">
          <h5>text: </h5>
          <p>{{ $post -> text}}</p>
        </div>
        <div class="dati">
          <h5>category: </h5>
          {{ $post -> category_id}}
          @foreach ($categories as $category)
            @if ($post -> category_id === $category -> id )
              {{ $category -> name }}
            @endif
          @endforeach
        </div>
      </ul>
    </div>

  </div>



@endsection
