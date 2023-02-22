<h1>My Cart</h1>
@if(Cart::count() > 0)
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach(Cart::content() as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <form action="{{ route('cart.update', $item->rowId) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="number" name="quantity" value="{{ $item->qty }}" min="1">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>{{ $item->total }}</td>
                    <td>
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Your cart is empty.</p>
@endif
