@extends('template.base')


@section('content')
  <div class="row mb-4">
    <div class="col-12">
      <a href="{{ route('start')}}" class="mb-5">Back</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <form  action="{{ route('storePost')}}"  method="post" >
        @csrf
        @method('POST')
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Author</label>
            <input type="text" class="form-control" name="author"  placeholder="author">
          </div>
          <div class="form-group col-md-6">
            <label>Category</label>
            <select class="form-control" name="category_id">
              @foreach ($categories as $category)
                <option name ="category_id" value="{{$category -> id}}">{{$category -> name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Post</label>
            <textarea class="form-control" name="text"  placeholder="Add text..."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-dark mt-2">Add Post</button>
      </form>
    </div>
  </div>




@endsection
