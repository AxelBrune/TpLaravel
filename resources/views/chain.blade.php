@include('header')
<h1>Chain of Responsability</h1><br>

<p><em>Erreur étape 1 </em></p>
<p>{{$handler->handle("Erreur construction")}}</p>
<p><em>Erreur étape 2 </em></p>
<p>{{$handler->handle("Erreur Acheminement")}}</p>
<p><em>Erreur étape 3 </em></p>
<p>{{$handler->handle("Livrée")}}</p>
@include('footer')