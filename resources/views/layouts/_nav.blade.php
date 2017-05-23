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
        <ul class="nav nav-pages hidden-xs">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Advertise </a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy</a></li>
        </ul>

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
                    <span class="text">All Categories</span>
                    <span class="toggle glyphicon glyphicon-align-justify"></span>
                </a>
                <div class="row subnav-wrapper">
                    <div class="col-md-2 col-sm-2 bg-bar">
                        <strong class="subnav-header">Pages</strong>
                        <ul class="subnav-full">
                            <li><a href="index.html">Blog 3 Columns</a></li>
                            <li class="active"><a href="blog.html">Blog 2 Columns</a></li>
                            <li><a href="blog-grids.html">Blog Grids</a></li>
                            <li><a href="reviews.html">Reviews Archive</a></li>
                            <li><a href="single.html">Single Blog</a></li>
                            <li><a href="single-full.html">Single Blog (Full)</a></li>
                            <li><a href="components.html">Components</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <strong class="subnav-header">Colorschemes</strong>
                        <ul class="subnav-full">
                            <li><a href="../html/">Coolorize</a></li>
                            <li><a href="../html-dark/">Dark</a></li>
                            <li><a href="../html-light/">Light</a></li>
                            <li><a href="#">Amet Commodo</a></li>
                            <li><a href="#">Consectetur </a></li>
                            <li><a href="#">Adipisicing</a></li>
                            <li><a href="#">Duis aute </a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <strong class="subnav-header">Banner Placements</strong>
                        <ul class="subnav-full">
                            <li><a href="banner-index.html">Home</a></li>
                            <li><a href="banner-single.html">Single</a></li>
                            <li><a href="#">Ipsum  Nisi </a></li>
                            <li><a href="#">Dolor Aliquip</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <strong class="subnav-header">Category</strong>
                        <ul class="subnav-full">
                            <li><a href="#">Ipsum  Nisi </a></li>
                            <li><a href="#">Dolor Aliquip</a></li>
                            <li><a href="#">Amet Commodo</a></li>
                            <li><a href="#">Consectetur </a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <strong class="subnav-header">Category</strong>
                        <ul class="subnav-full">
                            <li><a href="#">Consectetur </a></li>
                            <li><a href="#">Adipisicing</a></li>
                            <li><a href="#">Ipsum  Nisi </a></li>
                            <li><a href="#">Dolor Aliquip</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <strong class="subnav-header">Category</strong>
                        <ul class="subnav-full">
                            <li><a href="#">Ipsum  Nisi </a></li>
                            <li><a href="#">Dolor Aliquip</a></li>
                            <li><a href="#">Amet Commodo</a></li>
                            <li><a href="#">Consectetur </a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="active">
                <a href="#" data-toggle="li">Features</a>
                <div class="subnav-wrapper">
                    <ul class="subnav">
                        <li><a href="index.html">Blog 3 Columns</a></li>
                        <li class="active"><a href="blog.html">Blog 2 Columns</a></li>
                        <li><a href="blog-grids.html">Blog Grids</a></li>
                        <li><a href="reviews.html">Reviews Archive</a></li>
                        <li><a href="single.html">Single Blog</a></li>
                        <li><a href="single-full.html">Single Blog (Full)</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li>
                            <a href="#" data-toggle="li">Colorshemes</a>
                            <div class="subnav-wrapper">
                                <ul class="subnav">
                                    <li><a href="../html/">Coolorize</a></li>
                                    <li><a href="../html-dark/">Dark</a></li>
                                    <li><a href="../html-light/">Light</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" data-toggle="li">Banner Placements</a>
                            <div class="subnav-wrapper">
                                <ul class="subnav">
                                    <li><a href="banner-index.html">Home</a></li>
                                    <li><a href="banner-single.html">Single</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="full-subnav-wrapper">
                <a href="#" data-toggle="li">Drop Down 2</a>
                <div class="row subnav-wrapper subnav-tabbed">
                    <ul class="col-md-2 col-sm-2 subnav-tabbed-tabs alignright">
                        <li class="active"><a href="#tabAll">All </a></li>
                        <li><a href="#tabNotebook">Notebook</a></li>
                        <li><a href="#tabSmartphone">Smartphone</a></li>
                    </ul>
                    <div class="col-md-10 col-sm-10 subnav-tabbed-panels">
                        <div id="tabAll" class="subnav-tabbed-panel active">
                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">
                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                            <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">
                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>
                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>
                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">
                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">
                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>
                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>
                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">

                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>
                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>

                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">

                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>

                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>
                        </div>
                        <div id="tabNotebook" class="subnav-tabbed-panel">
                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">
                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">
                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>
                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>
                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">
                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>
                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>
                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">
                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>
                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>
                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">
                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">
                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>
                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>
                        </div>
                        <div id="tabSmartphone" class="subnav-tabbed-panel">

                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">

                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>
                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>
                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">
                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>
                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>
                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">
                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>
                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>
                            <article class="entry type-post style-thumbnail col-sm-3 col-md-3">
                                <figure class="entry-thumbnail">
                                    <a href="single.html">
                                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" alt="">

                                        <!--fallback for no javascript browsers-->
                                        <noscript>
                                            <img src="http://placehold.it/230x230" alt="">
                                        </noscript>
                                    </a>
                                </figure>

                                <h3 class="entry-title"><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a> </h3>
                            </article>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" data-toggle="li">Drop Down 3</a>
                <div class="subnav-wrapper">
                    <ul class="subnav-entries">
                        <li><a href="#">Recent Entry fits in this type of dropdown. </a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit </a></li>
                        <li><a href="#">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </a></li>
                        <li><a href="#">Ut enim ad minim veniam, quis nostrud exercitation ullamco </a></li>
                        <li><a href="#">Laboris nisi ut aliquip ex ea commodo consequat. </a></li>
                        <li><a href="#">Duis aute irure dolor in reprehenderit</a></li>
                        <li><a href="#">In voluptate velit esse cillum dolore eu fugiat nulla pariatur</a></li>
                        <li><a href="#">Excepteur sint occaecat cupidatat non proident</a></li>
                        <li><a href="#">Sunt in culpa qui officia deserunt mollit anim id est laborum</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Category 1</a></li>
            <li><a href="#">Category 2</a></li>
            <li><a href="#">Category 3</a></li>
            <li><a href="#">Category 4</a></li>
            <li><a href="#">Category 5</a></li>
            <li><a href="#">Category 6</a></li>
            <li><a href="#">Category 7</a></li>
        </ul>
    </div>
</nav>