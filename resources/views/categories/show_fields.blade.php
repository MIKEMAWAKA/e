<!-- Parent Field -->
<div class="form-group">
    {!! Form::label('parent', 'Parent:') !!}
    <p>{{ $category->parent }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $category->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $category->description }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $category->image }}</p>
</div>

