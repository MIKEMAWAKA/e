<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $subCategory->name }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $subCategory->image }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category :') !!}
    <p>{{ $subCategory->category->name }}</p>
</div>

<!-- Tag Id Field -->
<div class="form-group">
    {!! Form::label('tag_id', 'Tag:') !!}
    <p>{{ $subCategory->tag->name }}</p>
</div>

