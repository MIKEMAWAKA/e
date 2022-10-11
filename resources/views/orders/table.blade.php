<div class="table-responsive-sm">
    <table class="table table-striped" id="orders-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Fname</th>
        <th>Lname</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Location</th>
        <th>City</th>
        <th>Productname</th>
        <th>Itemprice</th>
        <th>Totalprice</th>
        <th>Product Id</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->name }}</td>
            <td>{{ $order->fname }}</td>
            <td>{{ $order->lname }}</td>
            <td>{{ $order->phone }}</td>
            <td>{{ $order->address }}</td>
            <td>{{ $order->location }}</td>
            <td>{{ $order->city }}</td>
            <td>{{ $order->productname }}</td>
            <td>{{ $order->itemprice }}</td>
            <td>{{ $order->totalprice }}</td>
            <td>{{ $order->product_id }}</td>
            <td>{{ $order->user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orders.show', [$order->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('orders.edit', [$order->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>