@extends('main')
@section('products')
    <h2>Products</h2>
    <div class="product selection">
        <table class="table">
            @foreach($products as $product)
                <tr>
                    <td>
                        <p>Product name: {{ $product->name }}</p>
                        <p>Product price: {{ $product->price }}</p>
                        <p>Product description: {{ $product->description }}</p>
                        <p>Product category: {{ $product->category->name }}</p>
                        @include('components.forms.add-to-cart-form')
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection


