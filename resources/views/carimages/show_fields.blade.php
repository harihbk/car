<!-- Car Field -->
<div class="col-sm-12">
    {!! Form::label('car', 'Car:') !!}
    <p>{{ $carimage->car }}</p>
</div>

<!-- Images Field -->
<div class="col-sm-12">
    {!! Form::label('images', 'Images:') !!}
    <p>{{ $carimage->images }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $carimage->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $carimage->updated_at }}</p>
</div>

