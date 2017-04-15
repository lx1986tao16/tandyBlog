<li>
    <a href="{{ route('admin_home') }}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-th"></i> <span>Article Manage</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-list"></i> Article List</a></li>
        <li><a href="{{ route('article.create') }}"><i class="fa fa-edit"></i> Post Article</a></li>
    </ul>
</li>