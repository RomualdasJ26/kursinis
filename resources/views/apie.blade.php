@extends('layouts.main')
@include('components.navbar_no_search')
@section('content')
<h2 style="text-align: center"> Apie mus </h2>

<p style="padding-left: 25%; padding-right: 25%; text-align:center" >Statybos darbus atliekame Vilniuje, Kaune, Klaipėdoje, Šiauliuose, Panevežyje ir visuose kituose Lietuvos miestuose. Taip pat, vykstame ir į tų miestų rajonus.
    Musu tikslas yra pasiūlyti savo klientams kokybiškas statybos bei apdailos paslaugas už palankias kainas.
    Mes įgyvendiname visus projektu etapus - nuo pasiruošimo statyboms: patarimų, iki pilno išbaigtumo,</p><br>
    <div style="float: left;" width="500">
        <table class="table table-striped" style="width: 100%"  >
        <thead>

        <thead>
            <tr>
                <th>Mūsų darbo laikas: </th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center width: 16.66%">Diena </td>
                <td style="text-align: center width: 16.66%">Valandos</td>
                </td>
            </tr>
        <tr>
            <td style="text-align: center width: 16.66%">Pirmadienis </td>
            <td style="text-align: center width: 16.66%">8:00 - 17:00 </td>
            </td>
        </tr>
        <tr>
            <td style="text-align: center width: 16.66%">Antradienis </td>
            <td style="text-align: center width: 16.66%">8:00 - 17:00 </td>
            </td>
        </tr>
        <tr>
            <td style="text-align: center width: 16.66%">Trečiadienis </td>
            <td style="text-align: center width: 16.66%">8:00 - 17:00 </td>
            </td>
        </tr>
        <tr>
            <td style="text-align: center width: 16.66%">Ketvirtadienis </td>
            <td style="text-align: center width: 16.66%">8:00 - 17:00 </td>
            </td>
        </tr>
        <tr>
            <td style="text-align: center width: 16.66%">Penktadienis </td>
            <td style="text-align: center width: 16.66%">8:00 - 17:00 </td>
            </td>
        </tr>
        <tr>
            <td style="text-align: center width: 16.66%">Šeštadienis </td>
            <td style="text-align: center width: 16.66%">9:00 - 15:00 </td>
            </td>
        </tr>
        <tr>
            <td style="text-align: center width: 16.66%">Sekmadienis </td>
            <td style="text-align: center width: 16.66%">Nedirbame </td>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
    <div>
    <img src="{{ asset('images/statyboss.jpg') }}" alt="description of myimage" width="70%" style="padding-left: 300px;">
    </div>
@include('components.footer')
@endsection