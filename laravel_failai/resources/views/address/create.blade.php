<h1>Adresses</h1>
<span>Adresai</span>
<form action="{{route('addresses.store')}}" method="post">

    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="country" placeholder="Country"><br>
    <input type="text" name="city" placeholder="City"><br>
    <input type="text" name="zip" placeholder="Zip"><br>
    <input type="text" name="street" placeholder="Street"><br>
    <input type="text" name="house_number" placeholder="House_number"><br>
    <input type="text" name="apartament_number" placeholder="Apartament_number"><br>
    <input type="text" name="state" placeholder="State"><br>
    <input type="text" name="type" placeholder="Type"><br>
    <input type="text" name="additional_info" placeholder="Additional_info"><br>
    <input type="text" name="user_id" placeholder="User_id"><br>
    <input type="text" name="created_at" placeholder="Created_at"><br>
    <input type="text" name="updated_at" placeholder="Updated_at"><br>
    <hr>
    <input type="submit" class="Atnaujinti">
    @csrf
</form>
