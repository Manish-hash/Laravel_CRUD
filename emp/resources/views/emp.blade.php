<h3>Employee Blade Template.</h3>
<h3>Company name is {{$comp}}</h3>
<h3>{{$name}}</h3>
Employee Array:<br>
@if(isset($fruits))
   @foreach($fruits as $f)
<div>{{$f}}</div>
   @endforeach

@else
array is empty
@endif