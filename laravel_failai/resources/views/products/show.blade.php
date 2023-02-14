<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="{{ $product->image}}" alt="">
                <span class="card-title">{{ $product->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$product->id}}</div>
                <p>Name: {{ $product->name }}</p>
                <p>Description: {{ $product->description }}</p>
                <p>Price: {{ $product->price }}</p>
                <p>Categories: {{ $product->category->name }}</p>
                <p>Creation date: {{ $product->created_at }}</p>
                <p>Last updated: {{ $product->updated_at }}</p>
            </div>
            <div class="card-action">
            </div>
                <a href="{{ route('products.edit', $product->id) }}"
                   data-tooltip="Redaguoti"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">edit</i>
                </a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <button type="submit"data-tooltip="Šalinti"
                            class="tooltipped waves-effect waves-light red btn-small">
                        <i class="tiny material-icons">delete</i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

