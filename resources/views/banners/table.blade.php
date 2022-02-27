<div class="table-responsive-sm">
    <table class="table table-striped" id="banners-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Image</th>
        <th>Tag</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($banners as $banner)
            <tr>
                <td>{{ $banner->name }}</td>
            <td>{{ $banner->image }}</td>
            <td>{{ $banner->tag->name}}</td>
                <td>
                    {!! Form::open(['route' => ['banners.destroy', $banner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('banners.show', [$banner->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('banners.edit', [$banner->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>