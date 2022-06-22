<div class="table-responsive">
    <table class="table" id="sells-table">
        <thead>
        <tr>
            <th>@lang('models/sells.fields.customer_id')</th>
            <th>@lang('models/sells.fields.product_id')</th>
            <th>@lang('models/sells.fields.price')</th>
            <th>@lang('models/sells.fields.paid_amount')</th>
            <th>@lang('models/sells.fields.installent_price')</th>
            <th>@lang('models/sells.fields.due_duration')</th>
            <th>@lang('models/sells.fields.grace_period')</th>
            <th colspan="3">@lang('crud.action')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sells as $sell)
            <tr>
                <td>{{ $sell->customer->name }}</td>
                <td>{{ $sell->product->name }}</td>
                <td>{{ $sell->price }}</td>
                <td>{{ $sell->paid_amount }}</td>
                <td>{{ $sell->installent_price }}</td>
                <td>{{ $sell->due_duration }}</td>
                <td>{{ $sell->grace_period }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sells.destroy', $sell->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sells.show', [$sell->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sells.edit', [$sell->id]) }}"
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
