<form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id">
    <button type="submit">Add to Cart</button>
</form>
