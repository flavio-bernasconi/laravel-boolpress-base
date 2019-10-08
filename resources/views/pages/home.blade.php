<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  </head>
  <body>
    <div class="container-fluid wrapper p-5">

        <div class="sidebar">
          <div class="col-12">
              <h1 class="">Categories</h1>
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
          <div class="col-12 mt-5">
            <a href="{{route('createPost')}}" class="btn btn-primary">Create Post</a>
          </div>
        </div>

        <div class="row  main">
          <h1 class="title">Latest Post</h1>

          <div class="col-12 wrap">
            @foreach ($posts as $post)
                <div class="link-post">
                  <a href="{{ route('showSinglePost', $post -> id )}}" class="links shadow">
                      <h3>{{$post -> author}}</h3>
                      <p>{{$post -> created_at}}</p>
                    </a>
                </div>
            @endforeach
          </div>
        </div>
      </div>
  </body>
</html>
