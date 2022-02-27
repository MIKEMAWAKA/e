<div class="table-responsive-sm">
    <table class="table table-striped" id="products-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Price</th>
        <th>RegularPrice</th>
        <th>SalePrice</th>
        <th>Category</th>
        <th>Subcategory</th>
        <th>Tag </th>
        {{-- <th>Vendor</th> --}}
        {{-- <th>Quantity</th> --}}
        <th>Stock</th>
        {{-- <th>Viewer</th> --}}
        {{-- <th>Sku</th> --}}
        <th>Location</th>
        {{-- <th>Region</th> --}}
        <th>Shortdescription</th>
        {{-- <th>Font Image</th>
        <th>Discount</th>
        <th>Parent</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->regular_price }}</td>
            <td>{{ $product->sale_price }}</td>
            <td>{{ $product->subcategory->category->name}}</td>
            <td>{{ $product->subcategory->name }}</td>
            <td>{{ $product->tag->name }}</td>
            {{-- <td>{{ $product->vendor_id }}</td> --}}
            {{-- <td>{{ $product->quantity }}</td> --}}
            <td>{{ $product->stock }}</td>
            {{-- <td>{{ $product->viewer }}</td> --}}
            {{-- <td>{{ $product->sku }}</td> --}}
            <td>{{ $product->location }}</td>
            {{-- <td>{{ $product->region }}</td> --}}
            <td>{{ $product->shortdescription }}</td>
            {{-- <td>{{ $product->font_image }}</td>
            <td>{{ $product->discount }}</td>
            <td>{{ $product->parent }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('products.edit', [$product->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>