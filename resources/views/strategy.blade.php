@include('header')
<h1>Stratégie</h1><br><br>

<p>Coût de la TVA de la {{ $line1->getVoiture()->getModele() }} est {{ $line1->getPrix() }} pour un prix total 
    de {{ $line1->getPrix()+$line1->getVoiture()->getFacture()->getPrix() }} €</p><br>
<p>Coût de la TVA de la {{ $line2->getVoiture()->getModele() }} est {{ $line2->getPrix() }} pour un prix total 
    de {{ $line2->getPrix()+$line2->getVoiture()->getFacture()->getPrix() }} €</p>
@include('footer')