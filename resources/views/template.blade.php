@include('header')
<h1>Template</h1><br><br>

@foreach ($voitures as $voiture)
    <p>{{ $voiture->getText() }}</p>
@endforeach
@include('footer')