<h1>表單建立</h1>


{!! Form::open(['url'=>'posts','method'=>'POST','files'=>true]) !!}

@include('posts._form')

{!! Form::close() !!}
@include('posts._error')
