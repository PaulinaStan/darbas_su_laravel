<div class="row">
    <div class="col s12">
        <h1>Products</h1>
        <a href="{{route('categories.create')}}" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>slug</th>
                <th>description</th>
                <th>image</th>
                <th>parent_id</th>
                <th>status_id</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->image}}</td>
                    <td>{{$category->parent_id}}</td>
                    <td>{{$category->status_id}}</td>
                    <td>
                        <a> href="{{route('categories.edit', $category->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('categories.destroy', $category->id)}}" method="post">
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
