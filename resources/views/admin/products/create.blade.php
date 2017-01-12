@extends('app')

@section('content')
<div class="container">

	<div class="col-md-6 col-md-offset-3">
	<h3 class="text-center">Novo Produto</h3>
	{!! Form::open(['route'=>'admin.products.store', 'class'=>'form well']) !!}
		@include('admin.products._form')
	  <div class="form-group">
	  	{!! Form::submit('Criar Produto',['class'=>"btn btn-success btn-block"])!!}
	  </div>
	
	  @include('errors._check')
	 
	{!! Form::close() !!}
	</div>
</div>


@stop