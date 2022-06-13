@extends('layouts.main')
@section('content')
<h2 class="my-3 text-center"> Redaguoti darbo laiką </h2>
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
    <label for="diena">diena</label>
    <input value="{{$laikas->diena}}" type="text" class="form-control" id="diena" name="diena">
  </div>
  <div class="form-group">
    <label for="valandos">valandos</label>
    <textarea class="form-control" id="valandos" rows="3" name="valandos">{{ $laikas->valandos}}</textarea>
  </div>
    <button type="submit" class="btn btn-secondary">Redaguoti darbo laiką </button>
</form>
@endsection