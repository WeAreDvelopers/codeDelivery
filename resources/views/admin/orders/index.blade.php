@extends('app')

@section('content')
<div class="container">
	<h3 class="">
		Pedidos
		<a href="{{route('admin.orders.create')}}" class="pull-right btn btn-primary">
			Adicionar <span class="glyphicon glyphicon-plus"></span>
		</a>
	</h3>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nº Pedido</th>
				<th>Cliente</th>
				
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>

			@foreach($orders as $order)

			<tr>
				<td class="col-md-1">{{$order->id}}</td>
				<td>{{$order->client->name}}</td>
				
				<td class="col-md-1"><a href="{{route('admin.orders.edit',['id'=>$order->id])}}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a> 
				<a href="{{route('admin.orders.delete',['id'=>$order->id])}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		<div class="pull-right">
			{!!$orders->render()!!}
		</div>
</div>


@stop