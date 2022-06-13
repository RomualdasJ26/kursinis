@extends('layouts.main')
@include('components.navbar_no_search')
@section('content')
<h2 class=" text-center"> Darbo laikai: </h2>
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
    <label for="diena">Pridėti darbo dieną</label>
    <input type="text" class="form-control" id="diena" name="diena">
  </div>
  <div class="form-group">
    <label for="valandos">Darbo valandos</label>
    <textarea class="form-control" id="valandos" rows="3" name="valandos"></textarea>
  </div>
    <button type="submit" class="btn btn-dark">Pridėti darbo laiką </button>
</form>
@include('components.footer')
@endsection