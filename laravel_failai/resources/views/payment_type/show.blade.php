<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200">
                <span class="card-title">{{ $payment_type->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$payment_type->id}}</div>
                <p>Name: {{ $payment_type->name}}</p>
                <p>Created at: {{ $payment_type->created_at}}</p>
                <p>Updated at: {{ $payment_type->updated_at}}</p>
            </div>
            <div class="card-action">
                <a href="{{ route('payments_type.edit', $payment_type->id) }}"
                   data-tooltip="Redaguoti"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">edit</i>
                </a>
                <form action="{{ route('payments_type.destroy', $payment_type->id) }}" method="POST">
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
