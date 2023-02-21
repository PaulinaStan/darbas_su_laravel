
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

<h1>Users</h1>
<span>Vartotojai</span>
<form action="{{route('users.update')}}" method="post">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="text" name="password" placeholder="Password"><br>
    <hr>
    <input type="submit" class="Atnaujinti">
    @csrf
</form>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="message hidden">{{ $error }}</div>
    @endforeach
@endif
