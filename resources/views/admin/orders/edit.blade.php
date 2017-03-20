@extends('app')

@section('content')
<div class="container">

	<div class="col-md-10 col-md-offset-1">
	<h3 class="text-center"></h3>
	{!! Form::model($order,['route'=>['admin.orders.update',$order->id],'class'=>'form well']) !!}
	<div class="col-md-4">
		<div class="form-group">
	{!! Form::label('Status','Status:') !!}
	{!! Form::select('status',$list_status,null,['class'=>'form-control']) !!}
</div>
		</div>
		<div class="clearfix"></div>
		<div class="col-md-4">
			    <address>
                          <strong>Cliente</strong>
                          <br><span class="glyphicon glyphicon-user"></span> {{$order->client->name}}
                          {!! Form::hidden('name',$order->client->name,['class'=>'form-control']) !!}
                          <br><span class="glyphicon glyphicon-envelope"></span> {{$order->client->email}}
                          <br>
                </address>
		</div>
		<div class="col-md-4 pull-right text-right">
			<h1 class="no-margin">Pedido Nº: {{$order->id}}</h1>
			<p>Data Pedido: {{date("d/m/Y", strtotime($order->created_at))}}</p>
		</div>
		
		<div class="col-md-12">
		<h3>Items Pedido</h3>
			<table class="table">
				<thead>
					<tr>
						<th>Produto</th>
						<th>Qtd</th>
						<th>Valor Uni.</th>
						<th>Valor Total</th>
					</tr>
				</thead>
				<tbody>
				<?php $totalPedido = 0; ?>
				@foreach($order->items as $item)
				<?php $totalPedido += $item->price * $item->qtd; ?>
				 
					<tr>
						<td>{{ $item->product->name }}</td>
						<td>{{$item->qtd}}</td>
						<td>R$ {{number_format($item->price,2, ',','.')}}</td>
						<td>R$ {{number_format($item->price * $item->qtd,2, ',','.')}}</td>
					</tr>
				@endforeach
				</tbody>
				<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td><strong>Total Pedido:</strong></td>
						<td><strong> R$ <?=number_format($totalPedido,2, ',','.'); ?></strong>
						{!! Form::hidden('price',$totalPedido,['class'=>'form-control']) !!}</td>
					</tr>
					
				</tfoot>
			</table>
		</div>
		<hr>
		<div class="col-md-12">
			<h3>Entregador</h3>
			<div class="col-md-3">{!! Form::label('Deliveryman','Definir entregador:') !!}</div>
			<div class="col-md-4">
			<div class="form-group">
			{!! Form::select('user_deliveryman_id',$deliveryman,null,['class'=>'form-control']) !!}
		</div>

			</div>
			<div class="col-md-4">
				<div class="form-group">
				  	{!! Form::submit('Salvar',['class'=>"btn btn-success btn-block"])!!}
				  </div>
			</div>
		</div>

		<div class="clearfix"></div>

	
	</div>
</div>


@stop