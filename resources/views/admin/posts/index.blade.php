@extends('layouts/admin')

@section('content')

  <div class="main-section">

    
    <table class="mt-5 table table-striped">
    <thead>
      <th id="title">
        Titolo
      </th>
      <th id="title">Contenuto</th>
      <th id="title">
        Slug
      </th>
      <th id="title">
        Comandi
      </th>
    </thead>
    
      <tbody>

      @foreach($posts as $post)
        <tr id="paragraph" >
          <td id="add">{{$post->title}}</td>
          <td>{{$post->content}}</td>
          <td>{{$post->slug}}</td>
          <td><a href="{{route('admin.posts.show', $post->slug)}}">Clicca qui!</a></td>
        </tr>
      @endforeach
      
      
      </tbody>
    </table>
  </div>
@endsection

<style>
  .main-section{
    background-color: beige;
    border: 3px solid black;
    border-radius: 40px;
  }

  #title{
    text-transform: uppercase;
    border: 2px solid grey;
    
  }

  #paragraph{
    border-bottom: 2px solid rgba(0, 0, 255, 0.247);
  }

  #paragraph:hover{
    font-size: 20px;
    transition: 1s;
  }
</style>