@foreach($children as $child)
    <ul class="treeview-menu">
        <li>
            <a href="#"><i class="fa fa-circle-o"></i>{{ $child->name }}
            @if(count($child->children))
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
                @include('shared.list_tree', ['children'=>$child->children])
            @else
            </a>
            @endif

        </li>
    </ul>
@endforeach