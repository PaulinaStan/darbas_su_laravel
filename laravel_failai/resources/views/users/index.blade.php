
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
<body>
<div class="row">
</div>
</body>
<div class="row">
    <div class="col s12">
        <h1>Users</h1>
        <a href="{{route('users.create')}}" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Email_verified_at</th>
                <th>Password</th>
                <th>Remember_token</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->email_verified_at}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->remember_token}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        <a> href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('users.destroy', $user->id)}}" method="post">
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
