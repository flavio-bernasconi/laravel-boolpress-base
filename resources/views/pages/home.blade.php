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



@endsection
