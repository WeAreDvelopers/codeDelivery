<div class="form-group">
	{!! Form::label('Name','Nome:') !!}
	{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Email','Email:') !!}
	{!! Form::text('email',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Phone','Telefone:') !!}
	{!! Form::text('phone',null,['class'=>'form-control']) !!}
</div>
<div class="form-group ">
	{!! Form::label('Address','Endereço:') !!}
	{!! Form::text('address',null,['class'=>'form-control']) !!}
</div>
<div class="row">
<div class="form-group col-md-4">
	{!! Form::label('City','Cidade:') !!}
	{!! Form::text('city',null,['class'=>'form-control']) !!}
</div>

<div class="form-group col-md-4">
	{!! Form::label('State','Estado:') !!}
	{!! Form::text('state',null,['class'=>'form-control']) !!}
</div>

<div class="form-group col-md-4">
	{!! Form::label('Zipcode','Cep:') !!}
	{!! Form::text('zipcode',null,['class'=>'form-control']) !!}
</div>
</div>