<x-message-banner  msg="User In About section" class="success" />

<x-message-banner  msg="Something went wrong" class="warning" />

<h1>ABout</h1>
<h4>My name is {{ $name }}</h4>
<h4>{{URL::current() }}</h4> <!-- this will give current url except for the query parameter -->
<h3>{{url()->current()}}</h3>

<h3>{{URL::full() }}</h3> <!-- this will give full url with query parameter -->
<h3>{{url()->full() }}</h3>

<h3>{{URL::previous() }}</h3> <!-- this will give previous url -->
<h3>{{URL::to('/home') }}</h3> <!-- this will give full url with query parameter -->

<a href="{{ URL::to('username', ['devika']) }}">Home Page</a>