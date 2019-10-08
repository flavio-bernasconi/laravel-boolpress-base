<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
                <h5>{{$category -> name}}
                  <span class="num">
                    @php
                      echo count($category -> posts)
                    @endphp
                  </span>
                </h5>
              </a>
            @endforeach
          </div>
          <div class="col-12 mt-5">
            <a href="{{route('createPost')}}" class="btn-create">Create Post<i class="fas fa-plus-circle"></i></a>
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
          {{ $posts -> links()}}
        </div>
      </div>
  </body>
</html>
