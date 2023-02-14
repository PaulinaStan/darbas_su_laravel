<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200">
                <span class="card-title">{{ $category->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$category->id}}</div>
                <p>Name: {{ $category->name }}</p>
                <p>Slug: {{ $category->slug }}</p>
                <p>Description: {{ $category->description }}</p>
                <p>Image: {{ $category->image }}</p>
                <p>Parent id: {{ $category->parent_id }}</p>
                <p>Status id: {{ $category->status_id }}</p>
            </div>
            <div class="card-action">
                <a href="{{ route('categories.edit', $category->id) }}"
                   data-tooltip="Redaguoti"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">edit</i>
                </a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    @csrf
                    <button type="submit"data-tooltip="Šalinti"
                            class="tooltipped waves-effect waves-light red btn-small">
                        <i class="tiny material-icons">delete</i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

