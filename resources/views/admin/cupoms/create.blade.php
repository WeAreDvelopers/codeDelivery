@extends('app')

@section('content')
<div class="container">

	<div class="col-md-6 col-md-offset-3">
	<h3 class="text-center">Novo Cupom</h3>
	{!! Form::open(['route'=>'admin.cupoms.store', 'class'=>'form well']) !!}
		@include('admin.cupoms._form')
	  <div class="form-group">
	  	{!! Form::submit('Criar Categoria',['class'=>"btn btn-success btn-block"])!!}
	  </div>
	
	  @include('errors._check')
	 
	{!! Form::close() !!}
	</div>
</div>


@stop