<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $producttype->name }}</p>
</div>

<!-- Types Field -->
<div class="col-sm-12">
    {!! Form::label('types', 'Types:') !!}
    <p>{{ $producttype->types }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $producttype->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $producttype->updated_at }}</p>
</div>

