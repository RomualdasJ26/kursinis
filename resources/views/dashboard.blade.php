@extends('layouts.main')
@include('components.navbar_pradinis')
@section('content')
<h2 style=text-align:center>Sveiki prisijungę į statybų įmonės puslapį</h2> <br>
<h4 style=font-weight:bold> Kokias paslaugas teikia ši statybų įmonė?</h4>
<p>Ši statybų įmonė teikia tokias paslaugas kaip, šildomų grindų montavimas,<br>
katilų ir kitų prietaisų montavimas, bei lauko darbus, tokiu kaip tvorų montavimas.</p>
<img src="{{ asset('images/statyboss.jpg') }}" alt="description of myimage" width="80%" style="padding-left: 300px;">
@include('components.footer')
  </footer>
@endsection