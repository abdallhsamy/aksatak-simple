<div class="table-responsive">
    <table class="table" id="installments-table">
        <thead>
        <tr>
            <th>@lang('models/installments.fields.sell_id')</th>
        <th>@lang('models/installments.fields.date')</th>
        <th>@lang('models/installments.fields.amount')</th>
        <th>@lang('models/installments.fields.payment_method')</th>
            <th colspan="3">@lang('crud.action')</th>
        </tr>
        </thead>
        <tbody>
         @foreach($installments as $installment)
            <tr>
                <td>
                    {{ $installment->sell->customer->name }}
                    |
                    {{ $installment->sell->product->name }}
                </td>
            <td>{{ $installment->date->format('Y-m-d') }}</td>
            <td>{{ $installment->amount }}</td>
            <td>{{ $installment->payment_method }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['installments.destroy', $installment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('installments.show', [$installment->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('installments.edit', [$installment->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
         @endforeach
        </tbody>
    </table>
</div>
