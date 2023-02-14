
<head>
    <style>
        {
            background-color: #206c1a;
            padding: 20px;
        }

        .row {
            background-color: #206c1a;
            font-size: 20px;
            font-weight: bold;

        }
        .col s12 {
            background-color: #a81111;
            padding: 20px;
        }
        .table {
            background-color: #4daf16;
            text-align: left;
            padding: 10px;
        }
        .btn {
            background-color: #43a423;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

    </style>
</head>

<div class="row">
    <div class="col s12">
        <h1>Products</h1>
        <a href="{{route('statuses.create')}}" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($statuses as $status)
                <tr>
                    <td>{{$status->id}}</td>
                    <td>{{$status->name}}</td>
                    <td>{{$status->type}}</td>
                    <td>{{$status->created_at}}</td>
                    <td>{{$status->updated_at}}</td>
                    <td>
                        <a> href="{{route('statuses.edit', $status->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('statuses.destroy', $status->id)}}" method="post">
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
