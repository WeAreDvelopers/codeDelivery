@extends('app')

@section('content')
<div class="container">

	<div class="col-md-6 col-md-offset-3">
	<h3 class="text-center">Editando Cliente: {{$client->user->name}}</h3>
	{!! Form::model($client,['route'=>['admin.clients.update',$client->id],'class'=>'form well']) !!}
	
	{!! Form::hidden('user_id',null,['class'=>'form-control']) !!}
		@include('admin.clients._form')
	  <div class="form-group">
	  	{!! Form::submit('Salvar',['class'=>"btn btn-success btn-block"])!!}
	  </div>
	
	  	@include('errors._check')
	 
	{!! Form::close() !!}
	</div>
</div>


@stop