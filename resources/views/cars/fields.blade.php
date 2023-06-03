<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Make Field -->
<div class="form-group col-sm-6">
    {!! Form::label('make', 'Make:') !!}
    {!! Form::text('make', null, ['class' => 'form-control']) !!}
</div>

<!-- Modelc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelc', 'Modelc:') !!}
    {!! Form::text('modelc', null, ['class' => 'form-control']) !!}
</div>

<!-- Kmdriven Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kmdriven', 'Kmdriven:') !!}
    {!! Form::text('kmdriven', null, ['class' => 'form-control']) !!}
</div>

<!-- Transmission Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transmission', 'Transmission:') !!}
    {!! Form::text('transmission', null, ['class' => 'form-control']) !!}
</div>

<!-- Fueltype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fueltype', 'Fueltype:') !!}
    {!! Form::text('fueltype', null, ['class' => 'form-control']) !!}
</div>

<!-- Registrationyear Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registrationyear', 'Registrationyear:') !!}
    {!! Form::date('registrationyear', null, ['class' => 'form-control','id'=>'registrationyear']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#registrationyear').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Noofowner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('noofowner', 'Noofowner:') !!}
    {!! Form::text('noofowner', null, ['class' => 'form-control']) !!}
</div>

<!-- Insurancevalidity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insurancevalidity', 'Insurancevalidity:') !!}
    {!! Form::date('insurancevalidity', null, ['class' => 'form-control','id'=>'insurancevalidity']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#insurancevalidity').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Insurancetype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insurancetype', 'Insurance Type:') !!}
    {!! Form::text('insurancetype', null, ['class' => 'form-control']) !!}
</div>

<!-- Rto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rto', 'Rto:') !!}
    {!! Form::text('rto', null, ['class' => 'form-control']) !!}
</div>

<!-- Carlocation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carlocation', 'Carlocation:') !!}
    {!! Form::text('carlocation', null, ['class' => 'form-control']) !!}
</div>

<!-- Makeyear Field -->
<div class="form-group col-sm-6">
    {!! Form::label('makeyear', 'Makeyear:') !!}
    {!! Form::text('makeyear', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Emi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emi', 'Emi:') !!}
    {!! Form::text('emi', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('profile', 'profile:') !!}
    {!! Form::file('profile', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('Slug', 'SLUG:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('gallery', 'Gallery:') !!}
    <input type="file" name="gallery[]" id="images" class="form-control" multiple>


    @foreach ($gallery ?? [] as $img)
    {{-- <img src="{{ asset('/storage/'.$img->images) }}" width="50" height="50"> --}}
    <img src="{{ asset('public/'.$img->images) }}" alt="" title="" width="50" height="50"/>



    @endforeach

    {{-- {!! Form::file('gallery[]', null, ['class' => 'form-control','multiple'=>'multiple','accept'=>'image/*']) !!} --}}
</div>
