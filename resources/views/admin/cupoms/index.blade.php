@extends('app')

@section('content')
<div class="container">
	<h3 class="">
		Cupoms
		<a href="{{route('admin.cupoms.create')}}" class="pull-right btn btn-primary">
			Adicionar <span class="glyphicon glyphicon-plus"></span>
		</a>
	</h3>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Código</th>
				<th>Valor</th>
				<th>Usado</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cupoms as $cupom)
			<tr>
				<td class="col-md-1">{{$cupom->id}}</td>
				<td>{{$cupom->code}}</td>
				<td>{{$cupom->value}}</td>
				<td>{{$cupom->used}}</td>
				<td class="col-md-1"><a href="{{route('admin.cupoms.edit',['id'=>$cupom->id])}}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a> 

				<a href="{{route('admin.cupoms.delete',['id'=>$cupom->id])}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		<div class="pull-right">
			{!!$cupoms->render()!!}
		</div>
</div>
@stop