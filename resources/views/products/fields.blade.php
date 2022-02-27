<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','required','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>


{{-- 
<div class="form-group col-sm-6">
    {!! Form::label('subcategory_id', 'category:') !!}

    <select class="custom-select form-control" required name="category_id" id="inputGroupSelect01">
        <option selected>Choose...</option>
           @foreach ($categories as $category)
               <option value="{{$category->id}}">{{$category->name}}</option>
           @endforeach
    </select>
</div> --}}

{{-- <!-- Subcategory Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subcategory_id', 'Subcategory:') !!}

    <select class="custom-select form-control" required name="subcategory_id" id="inputGroupSelect01">
        <option selected>Choose...</option>
           @foreach ($subcategories as $subcategory)
               <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
           @endforeach
    </select>
</div> --}}

<div class="form-group col-sm-6">
    {!! Form::label('subcategory_id', 'Subcategory:') !!}
<select name="subcategory_id" class="form-control" required>
    <option value="">Choose...</option>
    @foreach ($subcategories as $subcategory)
        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
    @endforeach
</select>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('tag_id', 'Tag:') !!}
<select name="tag_id" class="form-control"  required>
    <option value="">Choose...</option>
    @foreach ($tags as $tag)
     {{-- <option value="{{ $tag->id }}" @if($tag->id == $product->tag_id) selected @endif>{{ $tag->name }}</option> --}}
        <option value="{{$tag->id}}">{{$tag->name}}</option>
    @endforeach
</select>
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control','required','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Regular Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regular_price', 'Regular Price:') !!}
    {!! Form::text('regular_price', null, ['class' => 'form-control','required','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Sale Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_price', 'Sale Price:') !!}
    {!! Form::text('sale_price', null, ['class' => 'form-control','required','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Shortdescription Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shortdescription', 'Shortdescription:') !!}
    {!! Form::text('shortdescription', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>


<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>



{{-- <!-- Subcategory Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subcategory_id', 'Subcategory Id:') !!}
    {!! Form::number('subcategory_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- image Field -->

<div class="form-group col-sm-6 bg-primary" style="margin-bottom: 10px">
    {!! Form::label('quantity', 'Add Product Images/photos:') !!}
 
<div class="input-group hdtuto control-group lst increment  " >

    <input type="file" disabled name="images[]" class="myfrm form-control">

    <div class="input-group-btn "> 

      <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add more Images</button>

    </div>

  </div>

  <div class="clone hide  ">

    <div class="hdtuto control-group lst input-group  "  style="margin-top:10px">

      <input type="file" name="images[]" class="myfrm form-control">

      <div class="input-group-btn"> 

        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>

      </div>

    </div>

  </div>
</div>





<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>




{{-- 
<!-- Vendor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendor_id', 'Vendor Id:') !!}
    {!! Form::number('vendor_id', null, ['class' => 'form-control']) !!}
</div> --}}


<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::text('stock', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Viewer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('viewer', 'Viewer:') !!}
    {!! Form::number('viewer', null, ['class' => 'form-control']) !!}
</div>

{{-- <!-- Sku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sku', 'Sku:') !!}
    {!! Form::text('sku', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div> --}}



<!-- Region Field -->
<div class="form-group col-sm-6">
    {!! Form::label('region', 'Region:') !!}
    {!! Form::text('region', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>


{{-- <!-- Font Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('font_image', 'Image:') !!}
    {!! Form::text('font_image', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div> --}}



<!-- Discount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount', 'Discount:') !!}
    {!! Form::text('discount', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>

{{-- <!-- Parent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent', 'Parent:') !!}
    {!! Form::number('parent', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</div>
