<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/sells.fields.id').':') !!}
    <p>{{ $sell->id }}</p>
</div>

<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', __('models/sells.fields.customer_id').':') !!}
    <p>{{ $sell->customer_id }}</p>
</div>

<!-- Product Id Field -->
<div class="col-sm-12">
    {!! Form::label('product_id', __('models/sells.fields.product_id').':') !!}
    <p>{{ $sell->product_id }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', __('models/sells.fields.price').':') !!}
    <p>{{ $sell->price }}</p>
</div>

<!-- Paid Amount Field -->
<div class="col-sm-12">
    {!! Form::label('paid_amount', __('models/sells.fields.paid_amount').':') !!}
    <p>{{ $sell->paid_amount }}</p>
</div>

<!-- Installent Price Field -->
<div class="col-sm-12">
    {!! Form::label('installent_price', __('models/sells.fields.installent_price').':') !!}
    <p>{{ $sell->installent_price }}</p>
</div>

<!-- Due Duration Field -->
<div class="col-sm-12">
    {!! Form::label('due_duration', __('models/sells.fields.due_duration').':') !!}
    <p>{{ $sell->due_duration }}</p>
</div>

<!-- Grace Period Field -->
<div class="col-sm-12">
    {!! Form::label('grace_period', __('models/sells.fields.grace_period').':') !!}
    <p>{{ $sell->grace_period }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/sells.fields.created_at').':') !!}
    <p>{{ $sell->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/sells.fields.updated_at').':') !!}
    <p>{{ $sell->updated_at }}</p>
</div>

