<h1>作業</h1>
{!! Form::open(['url'=>'homework','method'=>'POST','files'=>true]) !!}

@include('homework._form')

{!! Form::close() !!}

@include('homework._error')

