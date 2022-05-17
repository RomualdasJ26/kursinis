@extends('layouts.main')
@section('content')
<h2 class="my-3 text-center"> Redaguoti paslaugą </h2>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }} </li>
    @endforeach
    </ul>
  </div>
@endif
<form action="" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Paslauga</label>
    <input value="{{$paslauga->name}}" type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="description">Aprašymas</label>
    <textarea class="form-control" id="description" rows="3" name="description">{{ $paslauga->description}}</textarea>
  </div>
    <button type="submit" class="btn btn-secondary">Redaguoti paslaugą </button>
</form>
@endsection