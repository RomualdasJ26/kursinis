@extends('layouts.main')
@section('content')
@include('components.navbar_no_search')
<table class="table table-striped" style="width: 50%">
    <thead>
        <tr>
            <th scope="col" style="text-align: center width: 16.66%">Diena</th>
            <th scope="col"style="text-align: center width: 16.66%">valandos</th>
            <th scope="col"style="text-align: center width: 16.66%">Redagavimas</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($laikai as $laikas )
    <tr>
        <td style="text-align: center width: 16.66%">{{$laikas->diena}} </td>
        <td style="text-align: center width: 16.66%">{{ Str::limit($laikas->valandos,50 ) }} </td>
        <td style="text-align: center width: 16.66%"><a href='/laikas/edit/{{$laikas->id}}' class="btn btn-dark" role="button">Redaguoti</a>
        <a href='/laikas/delete/ask/{{$laikas->id}}' class="btn btn-dark" role="button">ištrinti</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@include('components.footer')
  </footer>
@endsection