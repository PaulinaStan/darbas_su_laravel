<h1>Orders</h1>
<span>Uzsakymai</span>
<form action="{{route('orders.store')}}" method="post">

    <input type="text" name="user_id" placeholder="User_id"><br>
    <input type="text" name="shipping_addresses_id" placeholder="Shipping_addresses_id"><br>
    <input type="text" name="billing_addresses_id" placeholder="Billing_addresses_id"><br>
    <input type="text" name="status_id" placeholder="Status_id"><br>
    <input type="text" name="created_at" placeholder="Created_at"><br>
    <input type="text" name="updated_at" placeholder="Updated_at"><br>
    <hr>
    <input type="submit" class="Atnaujinti">
    @csrf
</form>
