
<h1>Users</h1>
<span>Vartotojai</span>
<form action="{{route('users.store')}}" method="post">
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
