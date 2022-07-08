<div class="list-group-item">
    <img  class="me-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width="32" />
    <a href="{{ route('users.show',$user) }}">{{ $user->name }}</a>
    @can('destroy',$user)
        <form action="{{ route('users.destroy',$user->id) }}" method="POST" class="float-end" onsubmit="return confirm('您确定要删除该用户吗？');">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
        </form>
    @endcan
</div>