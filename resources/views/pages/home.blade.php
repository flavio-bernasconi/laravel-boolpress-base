@extends('template.base')



@section('content')

  <div class="row mb-5">
    <div class="col-12">
        <h1 class="title">Categories</h1>
    </div>
    <div class="col-12 categorie">
      @foreach ($categories as $category)
        <a href="{{ route('showPost',$category -> id)}}" class="link">
          <h1>{{$category -> name}}
            <span class="num">
              @php
                echo count($category -> posts)
              @endphp
            </span>
          </h1>
        </a>
      @endforeach
    </div>

  </div>

  <div class="row mt-5">
    <div class="col-12">
        <h1 class="title">Latest Post</h1>
    </div>
    <div class="col-12">
      @foreach ($posts as $post)
        <a href="{{ route('showSinglePost', $post -> id )}}" class="links">
          <div class="link-post col-12">
              <h3>{{$post -> author}}</h3>
              <p>{{$post -> created_at}}</p>
          </div>
        </a>
      @endforeach
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12 mt-5">
      <a href="{{route('createPost')}}" class="btn btn-primary">Create Post</a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12 mt-5 mb-5">
      <h1>Create new post</h1>
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
            <select class="form-control" name="">
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
