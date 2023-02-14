

<h1>Payment type</h1>
<span>mokejimo forma</span>
<form action="{{route('payment_type')}}" method="post">
    <input type="text" name="Id" placeholder="id"><br>
    <input type="text" name="Name" placeholder="name"><br>
    <input type="text" name="Created_at" placeholder="created_at"><br>
    <input type="text" name="Updated_at" placeholder="updated_at"><br>
    <hr>
    <input type="submit" class="SEND">
    @csrf
</form>
