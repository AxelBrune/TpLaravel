@include('header')
<h1>Factory</h1>

<p>La première voiture de l'usine est de la marque :  {{ get_class($firstCar) }}</p>

@include('footer')