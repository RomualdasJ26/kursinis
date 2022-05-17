@extends('layouts.main')
@include('components.navbar_no_search')
@section('content')
<h2 class=" text-center"> Pridėti paslaugą: </h2>
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
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="description">Aprašymas</label>
    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
  </div>
    <button type="submit" class="btn btn-dark">Pridėti paslaugą </button>
</form>
@include('components.footer')
@endsection