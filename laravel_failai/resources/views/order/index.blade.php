<div class="row">
    <div class="col s12">
        <h1>Orders</h1>
        <a href="{{route('orders.create')}}" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>orders.user</th>
                <th>orders.shipping_address</th>
                <th>orders.billing_address</th>
                <th>orders.status</th>
                <th>messages.created_at</th>
                <th>messages.updated_at</th>
                <th>messages.actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->user->person}}</td>
                    <td>{{$order->slug}}</td>
                    <td>{{$order->shippingAddress}}</td>
                    <td>{{$order->billingAddress}}</td>
                    <td>{{$order->status->name}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->updated_at}}</td>
                    <td>
                        <a> href="{{route('orders.edit', $order->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('orders.destroy', $order->id)}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
