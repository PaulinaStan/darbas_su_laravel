<h1>Person</h1>
<span>Asmenys</span>
<form action="{{route('persons.store')}}" method="post">

    <input type="text" name="id" placeholder="Id"><br>
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="surname" placeholder="Surname"><br>
    <input type="text" name="personal_code" placeholder="Personal_code"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="text" name="user_id" placeholder="User_id"><br>
    <input type="text" name="addresses_id" placeholder="Addresses_id"><br>
    <input type="text" name="created_at" placeholder="Created_at"><br>
    <input type="text" name="updated_at" placeholder="Updated_at"><br>
    <hr>
    <input type="submit" class="Atnaujinti">
    @csrf
</form>
