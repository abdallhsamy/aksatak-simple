<!-- Sell Id Field -->

@if(Route::currentRouteName() == 'installments.create')
<div class="form-group col-sm-6">
    {!! Form::label('sell_id', __('models/installments.fields.sell_id').':') !!}
    {!! Form::select('sell_id', $sells, null, ['class' => 'form-control custom-select']) !!}
</div>
@endif


<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', __('models/installments.fields.date').':') !!}
    {!! Form::date('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', __('models/installments.fields.amount').':') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_method', __('models/installments.fields.payment_method').':') !!}
    {!! Form::select('payment_method', ['cash' => 'cash'], null, ['class' => 'form-control custom-select']) !!}
</div>
