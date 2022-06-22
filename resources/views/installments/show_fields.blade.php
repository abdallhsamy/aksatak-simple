<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/installments.fields.id').':') !!}
    <p>{{ $installment->id }}</p>
</div>

<!-- Sell Id Field -->
<div class="col-sm-12">
    {!! Form::label('sell_id', __('models/installments.fields.sell_id').':') !!}
    <p>{{ $installment->sell_id }}</p>
</div>

<!-- Date Field -->
<div class="col-sm-12">
    {!! Form::label('date', __('models/installments.fields.date').':') !!}
    <p>{{ $installment->date }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', __('models/installments.fields.amount').':') !!}
    <p>{{ $installment->amount }}</p>
</div>

<!-- Payment Method Field -->
<div class="col-sm-12">
    {!! Form::label('payment_method', __('models/installments.fields.payment_method').':') !!}
    <p>{{ $installment->payment_method }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/installments.fields.created_at').':') !!}
    <p>{{ $installment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/installments.fields.updated_at').':') !!}
    <p>{{ $installment->updated_at }}</p>
</div>

