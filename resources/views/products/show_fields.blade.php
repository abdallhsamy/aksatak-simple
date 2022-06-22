<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/products.fields.id').':') !!}
    <p>{{ $product->id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/products.fields.name').':') !!}
    <p>{{ $product->name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/products.fields.created_at').':') !!}
    <p>{{ $product->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/products.fields.updated_at').':') !!}
    <p>{{ $product->updated_at }}</p>
</div>

<!-- Product Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('product_category_id', __('models/products.fields.product_category_id').':') !!}
    <p>{{ $product->product_category_id }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', __('models/products.fields.price').':') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', __('models/products.fields.quantity').':') !!}
    <p>{{ $product->quantity }}</p>
</div>

