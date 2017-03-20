@extends('app')

@section('content')
<div class="container">
	<h3 class="">
		Clientes
		<a href="{{route('admin.clients.create')}}" class="pull-right btn btn-primary">
			Adicionar <span class="glyphicon glyphicon-plus"></span>
		</a>
	</h3>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($clients as $client)
			<tr>
				<td class="col-md-1">{{$client->id}}</td>
				<td>{{$client->user->name}}</td>
				<td class="col-md-1"><a href="{{route('admin.clients.edit',['id'=>$client->id])}}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a> 

				<a href="{{route('admin.clients.delete',['id'=>$client->id])}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		<div class="pull-right">
			{!!$clients->render()!!}
		</div>
</div>


@stop