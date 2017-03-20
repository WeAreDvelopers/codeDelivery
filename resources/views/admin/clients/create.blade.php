@extends('app')

@section('content')
<div class="container">

	<div class="col-md-6 col-md-offset-3">
	<h3 class="text-center">Novo Cliente</h3>
	{!! Form::open(['route'=>'admin.clients.store', 'class'=>'form well']) !!}
		@include('admin.clients._form')
	  <div class="form-group">
	  	{!! Form::submit('Salvar',['class'=>"btn btn-success btn-block"])!!}
	  </div>
	
	  @include('errors._check')
	 
	{!! Form::close() !!}
	</div>
</div>


@stop