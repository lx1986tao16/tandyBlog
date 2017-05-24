@if(count($children))
<div class="subnav-wrapper">
    <ul class="subnav">
        @foreach($children as $child)
        <li><a href="#">{{ $child->name }}</a>
            @include('shared.category_tree', ['children' => $child->children])
        </li>
        @endforeach
    </ul>
</div>
@endif