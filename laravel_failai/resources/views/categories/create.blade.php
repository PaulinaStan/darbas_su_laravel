
<h1>Editing</h1>
<span>Redagavimo forma</span>
<form action="{{route('categories.store')}}" method="post">
    <input type="text" name="name" placeholder="{{__('categories.name')}}"><br>
    <input type="text" name="slug" placeholder="{{__('categories.slug')}}"><br>
    <input type="text" name="description" placeholder="{{__('categories.description')}}"><br>
    <input type="text" name="image" placeholder="{{__('categories.image')}}"><br>
    <input type="text" name="parent_id" placeholder="{{__('categories.parent_id')}}"><br>
    <input type="text" name="status_id" placeholder="{{__('categories.status_id')}}"><br>
    <hr>
    <input type="submit" class="SEND">
    @csrf
</form>
