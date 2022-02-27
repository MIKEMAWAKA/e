<!-- Parent Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('parent', 'Parent:') !!}
    {!! Form::number('parent', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'required','maxlength' => 191]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'required','maxlength' => 191]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tags.index') }}" class="btn btn-secondary">Cancel</a>
</div>
