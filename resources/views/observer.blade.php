@include('header')
<h1>Observer</h1>

<p>{{ $obs1->display() }}</p>
<p>{{ $obs2->display() }}</p>
<h3>Update du sujet</h3>
<p>{{ $sujet->notifyObservers() }}</p>
<p>{{ $obs1->display() }}</p>
<p>{{ $obs2->display() }}</p>
@include('footer')