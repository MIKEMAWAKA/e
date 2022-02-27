<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $banner->name }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $banner->image }}</p>
</div>

<!-- Tag Id Field -->
<div class="form-group">
    {!! Form::label('tag_id', 'Tag:') !!}
    <p>{{ $banner->tag->name }}</p>
</div>

