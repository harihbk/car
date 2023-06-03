
<div class="form-group col-sm-6">
{!! Form::label('Product Type', 'Product Types:') !!}
{{Form::select('ptype',$ptypes,null,array('name'=>'ptype','class' => 'form-control'))}}
</div>


<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>
