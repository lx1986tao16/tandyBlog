@if(count($children))
    @foreach($children as $child)
        <option value="{{ $child->id }}">{{ $child->name }}</option>
        @if(count($child->children))
            @include('shared.select_tree', ['children' => $child->children])
        @endif
    @endforeach
@endif