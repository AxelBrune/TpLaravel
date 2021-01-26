@include('header')
<h1>State</h1>
<p>État au démarrage : {{$context->getState()->displayState()}}</p>
<p><em>Passge à l'état "Construire chassis"</em></p>
{{$context->changeState("chassis")}}
<p>État après changement : {{$context->getState()->displayState()}}</p>
<p><em>Passge à l'état "Peindre"</em></p>
{{$context->changeState("peindre")}}
<p>État après changement : {{$context->getState()->displayState()}}</p>
<p><em>Passge à l'état "Envoyer"</em></p>
{{$context->changeState("envoyer")}}
<p>État après changement : {{$context->getState()->displayState()}}</p>
@include('footer')