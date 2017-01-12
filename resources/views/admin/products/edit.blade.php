@extends('app')

@section('content')
<div class="container">

	<div class="col-md-6 col-md-offset-3">
	<h3 class="text-center">Editando Produto: {{$product->name}}</h3>
	{!! Form::model($product,['route'=>['admin.products.update',$product->id],'class'=>'form well']) !!}
		@include('admin.products._form')
	  <div class="form-group">
	  	{!! Form::submit('Criar Categoria',['class'=>"btn btn-success btn-block"])!!}
	  </div>
		<div class="form-group">
			<a href="{{route('admin.products.delete',['id'=>$product->id])}}">Remover Produto</a>
		</div>
	  	@include('errors._check')
	 
	{!! Form::close() !!}
	</div>
</div>


@stop