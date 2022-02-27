<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $product->name }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Regular Price Field -->
<div class="form-group">
    {!! Form::label('regular_price', 'Regular Price:') !!}
    <p>{{ $product->regular_price }}</p>
</div>

<!-- Sale Price Field -->
<div class="form-group">
    {!! Form::label('sale_price', 'Sale Price:') !!}
    <p>{{ $product->sale_price }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category :') !!}
    <p>{{ $product->subcategory->category->name }}</p>
</div>

<!-- Subcategory Id Field -->
<div class="form-group">
    {!! Form::label('subcategory_id', 'Subcategory :') !!}
    <p>{{ $product->subcategory->name }}</p>
</div>

<!-- Tag Id Field -->
<div class="form-group">
    {!! Form::label('tag_id', 'Tag') !!}
    <p>{{ $product->tag->name }}</p>
</div>
{{--  
<!-- Vendor Id Field -->
<div class="form-group">
    {!! Form::label('vendor_id', 'Vendor Id:') !!}
    <p>{{ $product->vendor_id }}</p>
</div>  --}}

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $product->quantity }}</p>
</div>

<!-- Stock Field -->
<div class="form-group">
    {!! Form::label('stock', 'Stock:') !!}
    <p>{{ $product->stock }}</p>
</div>

<!-- Viewer Field -->
<div class="form-group">
    {!! Form::label('viewer', 'Viewer:') !!}
    <p>{{ $product->viewer }}</p>
</div>

<!-- Sku Field -->
<div class="form-group">
    {!! Form::label('sku', 'Sku:') !!}
    <p>{{ $product->sku }}</p>
</div>

<!-- Location Field -->
<div class="form-group">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $product->location }}</p>
</div>

<!-- Region Field -->
<div class="form-group">
    {!! Form::label('region', 'Region:') !!}
    <p>{{ $product->region }}</p>
</div>

<!-- Shortdescription Field -->
<div class="form-group">
    {!! Form::label('shortdescription', 'Shortdescription:') !!}
    <p>{{ $product->shortdescription }}</p>
</div>

{{--  <!-- Font Image Field -->
<div class="form-group">
    {!! Form::label('font_image', 'Font Image:') !!}
    <p>{{ $product->font_image }}</p>
</div>  --}}

<!-- Discount Field -->
<div class="form-group">
    {!! Form::label('discount', 'Discount:') !!}
    <p>{{ $product->discount }}</p>
</div>

<!-- Parent Field -->
<div class="form-group">
    {!! Form::label('parent', 'Parent:') !!}
    <p>{{ $product->parent }}</p>
</div>

