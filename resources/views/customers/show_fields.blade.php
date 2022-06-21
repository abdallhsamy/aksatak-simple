<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/customers.fields.id').':') !!}
    <p>{{ $customer->id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/customers.fields.name').':') !!}
    <p>{{ $customer->name }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', __('models/customers.fields.address').':') !!}
    <p>{{ $customer->address }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', __('models/customers.fields.phone_number').':') !!}
    <p>{{ $customer->phone_number }}</p>
</div>

<!-- National Id Field -->
<div class="col-sm-12">
    {!! Form::label('national_id', __('models/customers.fields.national_id').':') !!}
    <p>{{ $customer->national_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/customers.fields.created_at').':') !!}
    <p>{{ $customer->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/customers.fields.updated_at').':') !!}
    <p>{{ $customer->updated_at }}</p>
</div>

