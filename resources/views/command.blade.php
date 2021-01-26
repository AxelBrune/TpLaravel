@include('header')
<h1>Command</h1>
<img src="https://miro.medium.com/max/700/1*JwWJpcrQ7lAyyAz2vTQiQA.png">

<p>
    Le design pattern Command permer d'encapsuler des requêtes, des méthodes afin de 
    pouvoir effectuer des requêtes sur un objet de manière plus simple.
</p>
<p>
    On peut voir sur l'image ci-dessus qu'il y a une classe client qui va créer 
    un objet concreteCommand. Il va alors lui demander de s'exécuter : l'invoker va alors récupérer 
    cette commande et l'encapsuler. Puis la concreteCommand qui s'occupe de ce qui 
    est demandé va envoyer le résultat au receiver.
</p>
<img src="https://miro.medium.com/max/700/1*Ysk_zJDYSjCitsJaW-xfwQ.png">
@include('footer')