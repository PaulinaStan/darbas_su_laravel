

<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200">
                <span class="card-title">{{ $user->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$user->id}}</div>
                <p>Name: {{$user->name}}</p>
                <p>Email: {{$user->email}}</p>
                <p>Email_verified_at: {{$user->email_verified_at}}</p>
                <p>Password: {{$user->password}}</p>
                <p>Remember_token: {{$user->remember_token}}</p>
                <p>Created_at: {{$user->created_at}}</p>
                <p>Updated_at: {{$user->updated_at}}</p>
            </div>
            <div class="card-action">
                <a href="{{ route('users.edit', $user->id) }}"
                   data-tooltip="Redaguoti"
                   class="tooltipped waves-effect waves-light green btn-small">
                    <i class="tiny material-icons">edit</i>
                </a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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

