<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/productCategories.fields.id').':') !!}
    <p>{{ $productCategory->id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/productCategories.fields.name').':') !!}
    <p>{{ $productCategory->name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/productCategories.fields.created_at').':') !!}
    <p>{{ $productCategory->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/productCategories.fields.updated_at').':') !!}
    <p>{{ $productCategory->updated_at }}</p>
</div>

