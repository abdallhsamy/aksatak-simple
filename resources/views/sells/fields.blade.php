<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', __('models/sells.fields.customer_id').':') !!}
    {!! Form::select('customer_id', $customers, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', __('models/sells.fields.product_id').':') !!}
    {!! Form::select('product_id', $products, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', __('models/sells.fields.price').':') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Paid Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_amount', __('models/sells.fields.paid_amount').':') !!}
    {!! Form::number('paid_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Installent Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('installent_price', __('models/sells.fields.installent_price').':') !!}
    {!! Form::number('installent_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Due Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('due_duration', __('models/sells.fields.due_duration').':') !!}
    {!! Form::select('due_duration', ['monthly' => 'monthly'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Grace Period Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grace_period', __('models/sells.fields.grace_period').':') !!}
    {!! Form::number('grace_period', null, ['class' => 'form-control']) !!}
</div>
