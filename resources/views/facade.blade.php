@include('header')
<h1>Façade</h1><br>
@foreach ($voitures as $voiture)
    <div class="card bg-secondary text-white">
        <p>Marque : {{ get_class($voiture) }}</p>
        <p>Modèle : {{ $voiture->getModele() }}</p>
        <p>Prix : {{ $voiture->getFacture()->getPrix() }}</p>
        <p>Concession : {{ $voiture->getConcession()->getName() }}</p>
    </div>
    <br><br>
@endforeach
@include('footer')