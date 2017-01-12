@extends('app')

@section('content')
<div class="container">
	<h3 class="">
		Produtos
		<a href="{{route('admin.products.create')}}" class="pull-right btn btn-primary">
			Adicionar <span class="glyphicon glyphicon-plus"></span>
		</a>
	</h3>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Produto</th>
				<th>Categoria</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td class="col-md-1">{{$product->id}}</td>
				<td>{{$product->name}}</td>
				<td>{{$product->category->name}}</td>
				<td class="col-md-1"><a href="{{route('admin.products.edit',['id'=>$product->id])}}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a> 

				<a href="{{route('admin.products.delete',['id'=>$product->id])}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		<div class="pull-right">
			{!!$products->render()!!}
		</div>
</div>


@stop