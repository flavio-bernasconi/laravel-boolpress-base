@extends('template.base')


@section('content')
  <div class="row mb-4">
    <div class="col-12">
      <a href="{{ URL::previous()}}" class="mb-5">Back</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <form  action="{{ route('updateSinglePost', $post -> id)}}"  method="post" >
        @csrf
        @method('POST')
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Author</label>
            <input type="text" class="form-control" name="author" value="{{ $post -> author}}">
          </div>
          <div class="form-group col-md-6">
            <label>Post</label>
            <input class="form-control" name="text" value="{{ $post -> text}}" ></input>
          </div>
        </div>
        <button type="submit" class="btn btn-dark mt-2">Edit Post</button>
      </form>
    </div>
  </div>
@endsection
