{{-- @extends('Layoutes.form') --}}
@extends('Layoutes.app')
@section('title' , 'create posts')
@section('nav')
    @parent
@show
@section('content')
<form action="{{route('posts.store')}}" method="POST" class="bg-secondary p-4 rounded-2 w-50 mx-auto text-dark">
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
    <div class="mb-3 mt-3">
        <label for="titel" class="form-label text-white" >Title:</label>
        <input type="text" class="form-control" id="titel" placeholder="Enter Title" name="title" value="{{old('title')}}">
    </div>

    <div class="mb-3 mt-3">
        <label class="text-white" for="dex">Descreption:</label>
        <textarea class="form-control" rows="5" id="dex" name="dex" >{{old('dex')}}</textarea >
    </div>

    <div class="mb-3 mt-3">
        <label  for="poste-cretor" class="form-label text-white">Poste Creator:</label>
        <select class="form-select" name="creator">
            <option value="">select one user</option>
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 mt-3">
        @yield('autherContent')
    </div>
    <button type="submit" class="btn btn-success d-block w-100">Create</button>
</form>
@endsection