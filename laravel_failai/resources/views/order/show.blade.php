<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200">
                <span class="card-title">{{ $order->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$order->id}}</div>
                <p>Person: {{ $order->user->person }}</p>
                <p>Slug: {{ $order->slug }}</p>
                <p>Shipping address: {{ $order->shipping_Address }}</p>
                <p>Billing address: {{ $order->billing_Address }}</p>
                <p>Status id: {{ $order->status_id }}</p>
                <p>Created at: {{ $order->created_at }}</p>
                <p>Updated at: {{ $order->updated_at }}</p>
            </div>
            <div class="card-action">
                <a href="{{ route('orders.edit', $order->id) }}"
                   data-tooltip="Redaguoti"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">edit</i>
                </a>
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
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
