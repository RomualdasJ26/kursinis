@extends('layouts.main')
@section('content')
@include('components.navbar')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"style="text-align: center">#</th>
            <th scope="col" style="text-align: center">Paslauga</th>
            <th scope="col"style="text-align: center">Aprašymas</th>
            <th scope="col"style="text-align: center">Redagavimas</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($paslaugos as $paslauga )
    <tr>
        <th scope="row" style="text-align: center"> {{ $paslauga->id}} </th>
        <td style="text-align: center">{{$paslauga->name}} </td>
        <td style="text-align: center">{{ Str::limit($paslauga->description,50 ) }} </td>
        <td style="text-align: center"><a href='/paslaugos/edit/{{$paslauga->id}}' class="btn btn-dark" role="button">Redaguoti</a>
        <a href='/paslaugos/delete/ask/{{$paslauga->id}}' class="btn btn-dark" role="button">ištrinti</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@include('components.footer')
  </footer>
@endsection