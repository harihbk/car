<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('type', 'Radio:') !!}
    {!! Form::radio('types', 'Radio', ['class' => 'form-control']) !!}
    {!! Form::label('type', 'Checkbox:') !!}
    {!! Form::radio('types', 'Checkbox', ['class' => 'form-control']) !!}

</div>
