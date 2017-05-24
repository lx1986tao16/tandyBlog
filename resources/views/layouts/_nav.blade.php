<nav id="header" class="header-navbar" role="navigation">
    <div class="header-navbar-inner container">
        <div id="brand" class="navbar-brand">
            <a href="index.html" rel="bookmark">
                <!-- to disable lazy loading, remove data-src and data-src-retina -->
                <img src="{{ asset('assets/vendor/images/dark-logo.png') }}" data-src="{{ asset('assets/vendor/images/dark-logo.png') }}" data-src-retina="{{ asset('assets/vendor/images/logo-retina.png') }}" width="244" height="56" alt="">
                <!--fallback for no javascript browsers-->
                <noscript>
                    <img src="{{ asset('assets/vendor/images/dark-logo.png') }}" alt="">
                </noscript>
            </a>
        </div>
        {{-- <ul class="nav nav-pages hidden-xs">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Advertise </a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy</a></li>
        </ul> --}}

        <ul class="nav nav-icons">
            <li>
                <a href="#" class="btn-icon" data-toggle=".header-navbar-inner" data-toggle-class="search-toggled-in">
                    <span class="search-toggled-out-icon glyphicon glyphicon-search"></span>
                    <span class="search-toggled-in-icon glyphicon glyphicon-remove"></span>
                </a>
            </li>
        </ul>
        <div class="search-wrapper js-stoppropagation">
            <div class="search-wrapper-inner">
                <form>
                    <input type="text" value="" placeholder="search ... ">
                    <button class="btn-icon" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </form>
            </div>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-all pull-right full-subnav-wrapper active">
                <a href="#" data-toggle="li"> 
                    <span class="text">所有分类</span>
                    <span class="toggle glyphicon glyphicon-align-justify"></span>
                </a>
                <div class="row subnav-wrapper">
                    @foreach($categories as $category)
                    @if($category->parent_id == 0)
                    <div class="col-md-2 col-sm-2 bg-bar">
                        <strong class="subnav-header">{{ $category->name }}</strong>
                        @if(count($category->children))
                        <ul class="subnav-full">
                        @foreach($category->children as $child )
                            <li><a href="index.html">{{ $child->name }} </a></li>
                        @endforeach
                        </ul>
                        @endif
                    </div>
                    @endif
                    @endforeach
                </div>
            </li>
            <li class="active">
                <a href="#" data-toggle="li">首页</a>
            </li>
            <li>
                <a href="#" data-toggle="li">分类</a>
                <div class="subnav-wrapper">
                    <ul class="subnav">
                        @foreach($categories as $category)
                            @if($category->parent_id == 0)
                                <li>
                                    <a href="#">{{ $category->name }}</a>
                                    @include('shared.category_tree', ['children' => $category->children])
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </li>
            <li>
                <a href="#" data-toggle="li">标签</a>
            </li>
            <li>
                <a href="#" data-toggle="li">关于</a>
            </li>
        </ul>
    </div>
</nav>