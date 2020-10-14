<div class="list-group-item">
  <img class="mr-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width=32>
  <a href="{{ route('users.show', $user) }}">
    {{ $user->name }}
  </a>
    {{ $user->score }}
  @can('scoreEdit', $user)
  <form method="POST" action="{{route('users.scoreEdit')}}">
    @csrf
    @method('post')
    <div class="form-group">

      <input type="text" name="score" class="form-control" value="">
      <input type="hidden" name="id"  class="form-control" value="{{$user->id}}">
      <button type="submit" class="btn btn-sm btn-primary ">修改</button>
    </div>
  </form>
  @endcan
  @can('destroy', $user)
    <form action="{{ route('users.destroy', $user->id) }}" method="post" class="float-right">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
    </form>
  @endcan
</div>
