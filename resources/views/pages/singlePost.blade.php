@extends('template.base')


@section('content')
  <div class="row">
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
      </ul>
    </div>

  </div>



@endsection
