<div class="table-responsive-sm">
    <table class="table table-striped" id="subCategories-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Image</th>
        <th>Category </th>
        <th>Tag </th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subCategories as $subCategory)
            <tr>
                <td>{{ $subCategory->name }}</td>
            <td>{{ $subCategory->image }}</td>
            <td>{{ $subCategory->category->name }}</td>
            <td>{{ $subCategory->tag->name }}</td>
                <td>
                    {!! Form::open(['route' => ['subCategories.destroy', $subCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('subCategories.show', [$subCategory->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('subCategories.edit', [$subCategory->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>