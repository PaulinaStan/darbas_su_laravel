<h1>Statuses</h1>
<span>Statusai</span>
<form action="{{route('statuses.create')}}" method="post">

    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="type" placeholder="Type"><br>
    <input type="text" name="created_at" placeholder="Created_at"><br>
    <input type="text" name="updated_at" placeholder="Updated_at"><br>
    <hr>
    <input type="submit" class="Atnaujinti">
    @csrf
</form>

