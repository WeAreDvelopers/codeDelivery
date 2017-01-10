@extends('app')

@section('content')
<div class="container">
	<h3 class="">
		Categorias
		<a href="{{route('admin.categories.create')}}" class="pull-right btn btn-primary">
			Nova Categoria <span class="glyphicon glyphicon-plus"></span>
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
			@foreach($categories as $categori)
			<tr>
				<td class="col-md-1">{{$categori->id}}</td>
				<td>{{$categori->name}}</td>
				<td class="col-md-1"><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
		<div class="pull-right">
			{!!$categories->render()!!}
		</div>
</div>


@stop