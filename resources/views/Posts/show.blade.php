@extends('Layoutes.app')
@section('title' , 'details')
@section('nav')
    @parent
@show
@section('content')
  @isset($postId)
    <h3 class="text-center m-2 text-info">The Details Of Blog {{$postId}}</h3>
    <div class="card w-50 mx-auto mt-5 text-dark">
        <div class="card-header">Post info</div>
        <div class="card-body">
            <p class="card-text"> <strong>Title : </strong> {{$post->title}}</p>
            <p class="card-text"> <strong>Descreption : </strong>{{$post->descreption}}</p>
        </div>
    </div>
    <div class="card w-50 mx-auto mt-2 text-dark">
        <div class="card-header">Post Creator info</div>
        <div class="card-body">
            <p class="card-text"> <strong>Created By :</strong> {{$post->user->name}}</p>
            <p class="card-text"> <strong>Email :</strong> {{$post->user->email}}</p>
            <p class="card-text"> <strong>Created At :</strong> {{$post->user->created_at}}</p>
        </div>
    </div>
  @endisset
@endsection
    
