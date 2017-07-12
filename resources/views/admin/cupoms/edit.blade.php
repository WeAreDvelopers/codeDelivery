@extends('app')

@section('content')
<div class="container">

	<div class="col-md-6 col-md-offset-3">
	<h3 class="text-center">Editando Cupom: {{$cupom->name}}</h3>
	{!! Form::model($cupom,['route'=>['admin.cupons.update',$cupom->id],'class'=>'form well']) !!}
		@include('admin.cupoms._form')
	  <div class="form-group">
	  	{!! Form::submit('Salvar',['class'=>"btn btn-success btn-block"])!!}
	  </div>
	
	  	@include('errors._check')
	 
	{!! Form::close() !!}
	</div>
</div>


@stop