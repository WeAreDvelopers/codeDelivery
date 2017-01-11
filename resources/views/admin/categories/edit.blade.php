@extends('app')

@section('content')
<div class="container">

	<div class="col-md-6 col-md-offset-3">
	<h3 class="text-center">Editando Categoria: {{$category->name}}</h3>
	{!! Form::model($category,['route'=>['admin.categories.update',$category->id],'class'=>'form well']) !!}
		@include('admin.categories._form')
	  <div class="form-group">
	  	{!! Form::submit('Criar Categoria',['class'=>"btn btn-success btn-block"])!!}
	  </div>
	
	  	@include('errors._check')
	 
	{!! Form::close() !!}
	</div>
</div>


@stop