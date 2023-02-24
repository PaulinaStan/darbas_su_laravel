<ul>
    @foreach ($cartItems as $item)
        <li>{{ $item->name }} - {{ $item->price }}</li>
    @endforeach
</ul>
