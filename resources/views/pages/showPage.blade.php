@extends('template.base')


@section('content')

  <div class="row">
    <a href="{{ route('start') }}" class="mb-5">Back</a>

  </div>
  <div class="row">
    <div class="lg-12 category-title">
      <h1 class="mb-4 mt-4">{{$category -> name}}</h1>
      <span class="num-post">
        @php
          echo count($category -> posts)
        @endphp
      </span>
    </div>
  </div>

<div class="row">
  <div class="list-post">
    @foreach ($category -> posts as $post)
        <div class="box pt-5 pb-5 shadow">
          <a href="{{ route('showSinglePost', $post -> id )}}" class="links">
            <h4>{{$post ->author }}</h4>
            <p>
              @php
                if (strlen($post ->text) > 90 )
                  echo substr($post ->text , 0,70) . ' ...' ;
              @endphp
              {{-- {{$post ->text }} --}}
            </p>
          </a>
            <a href="{{ route('editSinglePost', $post -> id )}}" class="btn-edit">Edit</a>
            <a href="{{ route('deleteSinglePost', $post -> id )}}" class="btn-delete">Delete</a>
        </div>
    @endforeach
  </div>
</div>







@endsection
