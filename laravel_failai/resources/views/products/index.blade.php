<div class="row">
    <div class="col s12">
        <h1>Products</h1>
        <a href="{{route('products.create')}}" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->Description}}</td>
                <td>{{$product->Price}}</td>
                <td>
                    <a> href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('products.destroy', $product->id)}}" method="post">
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

