
@extends('Layoutes.app')
@section('title' , 'bloges')
@section('nav')
  @parent
@endsection
<script>
  function checkAccept(){
      if(confirm('are you sure') === false) {
        return false ;
      }
    }
</script>
@section('content')
  <a class="btn btn-success d-block w-25 mx-auto mb-4" href="{{route('posts.create')}}" >Create Post</a>
  <table class="table container text-light">
    <thead>
      <tr class="text-center">
        <th>#</th>
        <th>Title</th>
        <th>Posted By</th>
        <th>Cretaed At</th>
        <th class="text-end">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($postes as $post)
          <tr class="text-center">
              <td>{{$post ->id}}</td>
              <td>{{$post ->title}}</td>
              <td>
                {{$post->user->name}}
              </td>
              <td>{{substr($post ->createdAt , 0 , 10)}}</td>
              <td class="text-end">
                  <a class="btn btn-info text-white" href="{{route('posts.show' , $post['id'])}}">View</a>
                  <a class="btn btn-primary" href="{{route('posts.edit' , $post['id'])}}">Edit</a>
                  <form id="if" action="{{route('posts.destroy' , $post['id'])}}" method="POST" class="d-inline">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn-danger" id="btn" onclick="checkAccept()">Delete</button>
                  </form>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection

