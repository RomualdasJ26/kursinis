@extends('layouts.main')
@section('content')
@include('components.navbar')
<div>
    <table class="table table-striped" style="width: 50%">
    <thead>
        <tr>
            <th scope="col" style="text-align: center width: 16.66%">Paslauga</th>
            <th scope="col"style="text-align: center width: 16.66%">Aprašymas</th>
            <th scope="col"style="text-align: center width: 16.66%">Redagavimas</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($paslaugos as $paslauga )
    <tr>
        <td style="text-align: center width: 16.66%">{{$paslauga->name}} </td>
        <td style="text-align: center width: 16.66%">{{ Str::limit($paslauga->description,50 ) }} </td>
        <td style="text-align: center width: 16.66%"><a href='/paslaugos/edit/{{$paslauga->id}}' class="btn btn-dark" role="button">Redaguoti</a>
        <a href='/paslaugos/delete/ask/{{$paslauga->id}}' class="btn btn-dark" role="button">ištrinti</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
@include('components.footer')
  </footer>
@endsection