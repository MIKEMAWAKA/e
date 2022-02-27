<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 191,'required','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control','required','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>




<div class="form-group col-sm-6">
    {!! Form::label('tag_id', 'Tag(option):') !!}
<select name="tag_id" class="form-control" >
    <option value="">Choose...</option>
    @foreach ($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
    @endforeach
</select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('banners.index') }}" class="btn btn-secondary">Cancel</a>
</div>
