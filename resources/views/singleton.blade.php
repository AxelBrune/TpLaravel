@include('header')
<h1>Singleton</h1>
<p>Count de $a : {{ $firstElement->incrementCount() }}</p>
<p>Count de $b : {{ $secondElement->incrementCount() }}</p>
<p>Second count de $a : {{ $firstElement->incrementCount() }}</p>
@include('footer')