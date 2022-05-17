@extends('layouts.main')
@section('content')
<h2 class="my-3 text-center"> Ar tikrai norite ištrinti šią paslaugą? </h2>

<div class="col-sm-4 my-4">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{$paslauga->name}}</h2>
            <p class="card-text">{!!$paslauga->description!!}</p>
            <a href='/' class="btn btn-dark" role="button">Ne</a>
            <a href='/paslaugos/delete/{{$paslauga->id}}' class="btn btn-dark" role="button">Taip</a>
        </div>        
    </div>
</div>
@endsection