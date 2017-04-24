<form action="{{ route('category.destroy', $category->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger btn-xs">删除</button>
</form>