@include('header')
<h1>Itérateur</h1><br><br>

@while ($voitures->hasNext() == true)
    <div class="card bg-secondary text-white">
        <p>Marque : {{ get_class($voitures->current()) }}</p>
        <p>Modèle : {{ $voitures->current()->getModele() }}</p>
        <p>Prix : {{ $voitures->current()->getFacture()->getPrix() }}</p>
        <p>Concession : {{ $voitures->current()->getConcession()->getName() }}</p>
        {{ $voitures->next() }}
    </div>
    <br><br>
@endwhile
@include('footer')