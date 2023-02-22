
<!-- Pridėti produktą į krepšelį mygtukas -->
<form action="{{ route('cart.store') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id">
    <input type="hidden" name="product_name">
    <input type="hidden" name="product_price">
    <input type="hidden" name="product_image">
    <button type="submit">Pridėti į krepšelį</button>
</form>

<!-- Produktų krepšelio mygtukai -->
<form action="{{ route('cart.update', $product->id) }}" method="POST">
    @csrf
    <input type="hidden" name="product_quantity">
    <button type="submit">Padidinti kiekį</button>
</form>

<form action="{{ route('cart.update', $product->id) }}" method="POST">
    @csrf
    <input type="hidden" name="product_quantity">
    <button type="submit">Sumažinti kiekį</button>
</form>

<form action="{{ route('cart.destroy', $product->id) }}" method="POST">
    @csrf
    <button type="submit">Ištrinti produktą</button>
</form>



<!--Pridėti mygtuką "Add to Cart" kiekvienam produktui:-->

@foreach($products as $product)
    <div>
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }} USD</p>
        <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
@endforeach



