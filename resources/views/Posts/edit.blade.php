{{-- @extends('Layoutes.form') --}}
@extends('Layoutes.app')
@section('title' , 'edit post')
@section('nav')
  @parent
@endsection
@section('content')
<form action="{{route('posts.update' , $postId)}}" method="POST" class="bg-success w-50 mt-5 mx-auto text-dark p-3 rounded-4">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
    @method('PUT')
    <div class="mb-3 mt-3">
        <label for="titel" class="form-label text-dark">Title:</label>
        <input type="text" class="bg-secondar form-control" id="titel" placeholder="Enter Title" name="title" value="{{$post->title}}">
    </div>

    <div class="mb-3 mt-3">
        <label for="dex" class="text-dark">Descreption:</label>
        <textarea class="form-control" rows="5" id="dex" name="dex"  >{{$post->descreption}}</textarea>
    </div>

    <div class="mb-3 mt-3">
        <label for="poste-cretor" class="form-label text-dark">Poste Creator:</label>
        <select class="form-select" name="creator">
            <option value="">....</option>
            @foreach ($users as $user)  
                <option value="{{$user->id}}" @selected($post->user_id == $user->id)>{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 mt-3">
        @yield('autherContent')
    </div>
    <button type="submit" class="btn btn-primary d-block w-100">Update</button>
</form>
@endsection