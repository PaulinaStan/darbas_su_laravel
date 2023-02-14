<div class="row">
    <div class="col s12">
        <h1>Products</h1>
        <a href="{{route('payments_type.create')}}" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>apple_pay</th>
                <th>google_pay</th>
                <th>smart_id</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments_type as $payment_type)
                <tr>
                    <td>{{$payment_type->id}}</td>
                    <td>{{$payment_type->name}}</td>
                    <td>{{$payment_type->created_at}}</td>
                    <td>{{$payment_type->updated_at}}</td>
                    <td>
                        <a> href="{{route('payments_type.edit', $payment_type->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('payments_type.destroy', $payment_type->id)}}" method="post">
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
