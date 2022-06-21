<div class="table-responsive">
    <table class="table" id="productCategories-table">
        <thead>
        <tr>
            <th>@lang('models/productCategories.fields.name')</th>
            <th colspan="3">@lang('crud.action')</th>
        </tr>
        </thead>
        <tbody>
         @foreach($productCategories as $productCategory)
            <tr>
                <td>{{ $productCategory->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['productCategories.destroy', $productCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productCategories.show', [$productCategory->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('productCategories.edit', [$productCategory->id]) }}"
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
