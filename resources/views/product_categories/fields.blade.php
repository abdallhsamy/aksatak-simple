<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/productCategories.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control','minlength' => 3,'maxlength' => 155]) !!}
</div>