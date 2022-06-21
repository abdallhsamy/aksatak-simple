<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/customers.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control','minlength' => 3,'maxlength' => 155]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', __('models/customers.fields.address').':') !!}
    {!! Form::text('address', null, ['class' => 'form-control','minlength' => 3,'maxlength' => 155]) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', __('models/customers.fields.phone_number').':') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control','minlength' => 10,'maxlength' => 14]) !!}
</div>

<!-- National Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('national_id', __('models/customers.fields.national_id').':') !!}
    {!! Form::text('national_id', null, ['class' => 'form-control','minlength' => 14,'maxlength' => 14]) !!}
</div>