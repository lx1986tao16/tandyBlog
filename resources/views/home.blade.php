@extends('layouts.default')

@section('content')
<div id="main" class="container">
    <div class="section row entries bg-primary section-no-margin-bottom">
        <article class="entry style-grid style-hero hero-sm-largest type-post col-sm-12 col-md-6 colheight-sm-1 colheight-md-2 colheight-lg-2 colheight-xl-2">
            <div class="ribbon ribbon-pulled ribbon-small ribbon-highlight">
                <a href="blog.html">Category Name</a>
            </div>

            <header class="entry-header">
                <h3 class="entry-title"><a href="single.html">This can be use for hand picked featured posts by staffs - sit voluptatem accusantium doloremque laudantium</a> </h3>
                <div class="entry-meta">
                    <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                    <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                </div>
            </header>
            <figure class="entry-thumbnail">
                <a href="single.html" class="overlay overlay-primary"></a>
                <!-- to disable lazy loading, remove data-src and data-src-retina -->
                <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/680x452" data-src-retina="http://placehold.it/1024x680" width="680" height="452" alt="">

                <!--fallback for no javascript browsers-->
                <noscript>
                    <img src="http://placehold.it/680x452" alt="">
                </noscript>

            </figure>

        </article>

        <article class="entry style-grid style-hero type-post col-md-6 col-lg-3 colheight-sm-1">
            
            <div class="ribbon ribbon-pulled ribbon-small ribbon-highlight">
                <a href="">Entertainment</a>
            </div>

            <header class="entry-header">
                <h3 class="entry-title"><a href="single.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a> </h3>
                <div class="entry-meta">
                    <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                    <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                </div>
            </header>
            
            <figure class="entry-thumbnail">

                <a href="single.html" class="overlay overlay-primary"></a>

                <!-- to disable lazy loading, remove data-src and data-src-retina -->
                <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

                <!--fallback for no javascript browsers-->
                <noscript>
                    <img src="http://placehold.it/480x280" alt="">
                </noscript>

            </figure>

        </article>

        <article class="entry style-grid style-hero type-post col-md-6 col-lg-3 colheight-sm-1">
            
            <div class="ribbon ribbon-pulled ribbon-small ribbon-highlight">
                <a href="blog.html">Event</a>
            </div>

            <header class="entry-header">
                <h3 class="entry-title"><a href="single.html">Rumor: The long awaited update for Retina Display is ready to be annaunced on the next event held by them</a> </h3>
                <div class="entry-meta">
                    <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                    <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                </div>
            </header>
            
            <figure class="entry-thumbnail">

                <a href="single.html" class="overlay overlay-primary"></a>

                <!-- to disable lazy loading, remove data-src and data-src-retina -->
                <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/680x452" data-src-retina="http://placehold.it/1024x680" width="680" height="452" alt="">

                <!--fallback for no javascript browsers-->
                <noscript>
                    <img src="http://placehold.it/680x452" alt="">
                </noscript>

            </figure>

        </article>

        <article class="entry style-grid style-hero type-post col-md-6 col-lg-3 colheight-sm-1">
            
            <div class="ribbon ribbon-pulled ribbon-small ribbon-highlight">
                <a href="blog.html">Social Media</a>
            </div>

            <header class="entry-header">
                <h3 class="entry-title"><a href="single.html">Postman will send notifications to your flashy smartphone about popular people and their latest shouts.</a> </h3>
                <div class="entry-meta">
                    <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                    <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                </div>
            </header>
            
            <figure class="entry-thumbnail">

                <a href="single.html" class="overlay overlay-primary"></a>

                <!-- to disable lazy loading, remove data-src and data-src-retina -->
                <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

                <!--fallback for no javascript browsers-->
                <noscript>
                    <img src="http://placehold.it/480x280" alt="">
                </noscript>

            </figure>

        </article>

        <article class="entry style-grid style-hero type-post col-md-6 col-lg-3 colheight-sm-1">
            
            <div class="ribbon ribbon-pulled ribbon-small ribbon-highlight">
                <a href="blog.html">Social Media</a>
            </div>

            <header class="entry-header">
                <h3 class="entry-title"><a href="single.html">Postman will send notifications to your flashy smartphone about popular people and their latest shouts.</a> </h3>
                <div class="entry-meta">
                    <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                    <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                </div>
            </header>
            
            <figure class="entry-thumbnail">

                <a href="single.html" class="overlay overlay-primary"></a>

                <!-- to disable lazy loading, remove data-src and data-src-retina -->
                <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

                <!--fallback for no javascript browsers-->
                <noscript>
                    <img src="http://placehold.it/480x280" alt="">
                </noscript>

            </figure>

        </article>

    </div>

    <div id="content" class="content section row">

        <div class="col-md-8 bg-base col-lg-8 col-xl-9">

            <div class="ribbon ribbon-highlight">
                <ol class="breadcrumb ribbon-inner">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li class="active">Blog 2 Columns</li>
                </ol>
            </div>
            
            <div class="entries">

                <article class="entry style-media media type-post">

                    <figure class="media-object pull-left entry-thumbnail hidden-xs">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/230x230" alt="">
                        </noscript>

                    </figure>

                    <div class="media-body">

                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="single.html" rel="bookmark">Sunt in culpa qui officia deserunt mollit anim.</a>
                            </h3>

                            <div class="entry-meta">
                                <span class="author">by <a href="blog.html">John Doe</a></span>
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Entertaintment</a></span>
                            </div>
                        </header>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            <a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
                        </p>

                    </div>

                </article>

                <article class="entry style-media media type-post">

                    <figure class="media-object pull-left entry-thumbnail hidden-xs">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/230x230" alt="">
                        </noscript>

                    </figure>

                    <div class="media-body">

                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="single.html" rel="bookmark">Sunt in culpa qui officia deserunt mollit anim.</a>
                            </h3>

                            <div class="entry-meta">
                                <span class="author">by <a href="blog.html">John Doe</a></span>
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Entertaintment</a></span>
                            </div>
                        </header>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            <a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
                        </p>

                    </div>

                </article>

                <article class="entry style-media media type-post">
                    <figure class="media-object pull-left entry-thumbnail hidden-xs">
                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="" alt="">
                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/230x230" alt="">
                        </noscript>
                    </figure>

                    <div class="media-body">
                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="single.html" rel="bookmark">Sunt in culpa qui officia deserunt mollit anim.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="author">by <a href="blog.html">John Doe</a></span>
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Entertaintment</a></span>
                            </div>
                        </header>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            <a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
                        </p>

                    </div>

                </article>

                <article class="entry style-media media type-post">
                    <figure class="media-object pull-left entry-thumbnail hidden-xs">
                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="" alt="">
                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/230x230" alt="">
                        </noscript>
                    </figure>
                    <div class="media-body">
                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="single.html" rel="bookmark">Sunt in culpa qui officia deserunt mollit anim.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="author">by <a href="blog.html">John Doe</a></span>
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Entertaintment</a></span>
                            </div>
                        </header>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            <a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
                        </p>
                    </div>
                </article>
                <article class="entry style-media media type-post">
                    <figure class="media-object pull-left entry-thumbnail hidden-xs">
                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="" alt="">
                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/230x230" alt="">
                        </noscript>
                    </figure>
                    <div class="media-body">
                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="single.html" rel="bookmark">Sunt in culpa qui officia deserunt mollit anim.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="author">by <a href="blog.html">John Doe</a></span>
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Entertaintment</a></span>
                            </div>
                        </header>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            <a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
                        </p>

                    </div>

                </article>

                <article class="entry style-media media type-post">

                    <figure class="media-object pull-left entry-thumbnail hidden-xs">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/230x230" alt="">
                        </noscript>

                    </figure>

                    <div class="media-body">

                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="single.html" rel="bookmark">Sunt in culpa qui officia deserunt mollit anim.</a>
                            </h3>

                            <div class="entry-meta">
                                <span class="author">by <a href="blog.html">John Doe</a></span>
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Entertaintment</a></span>
                            </div>
                        </header>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            <a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
                        </p>

                    </div>

                </article>

                <article class="entry style-media media type-post">

                    <figure class="media-object pull-left entry-thumbnail hidden-xs">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/230x230" alt="">
                        </noscript>

                    </figure>

                    <div class="media-body">

                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="single.html" rel="bookmark">Sunt in culpa qui officia deserunt mollit anim.</a>
                            </h3>

                            <div class="entry-meta">
                                <span class="author">by <a href="blog.html">John Doe</a></span>
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Entertaintment</a></span>
                            </div>
                        </header>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            <a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
                        </p>

                    </div>

                </article>

                <article class="entry style-media media type-post">

                    <figure class="media-object pull-left entry-thumbnail hidden-xs">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/230x230" alt="">
                        </noscript>

                    </figure>

                    <div class="media-body">

                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="single.html" rel="bookmark">Sunt in culpa qui officia deserunt mollit anim.</a>
                            </h3>

                            <div class="entry-meta">
                                <span class="author">by <a href="blog.html">John Doe</a></span>
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Entertaintment</a></span>
                            </div>
                        </header>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            <a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
                        </p>

                    </div>

                </article>

                <article class="entry style-media media type-post">

                    <figure class="media-object pull-left entry-thumbnail hidden-xs">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/230x230" alt="">
                        </noscript>

                    </figure>

                    <div class="media-body">

                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="single.html" rel="bookmark">Sunt in culpa qui officia deserunt mollit anim.</a>
                            </h3>

                            <div class="entry-meta">
                                <span class="author">by <a href="blog.html">John Doe</a></span>
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Entertaintment</a></span>
                            </div>
                        </header>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            <a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
                        </p>

                    </div>

                </article>

                <article class="entry style-media media type-post">

                    <figure class="media-object pull-left entry-thumbnail hidden-xs">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/230x230" data-src-retina="http://placehold.it/460x460" width="230" height="230" class="" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/230x230" alt="">
                        </noscript>

                    </figure>

                    <div class="media-body">

                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="single.html" rel="bookmark">Sunt in culpa qui officia deserunt mollit anim.</a>
                            </h3>

                            <div class="entry-meta">
                                <span class="author">by <a href="blog.html">John Doe</a></span>
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Entertaintment</a></span>
                            </div>
                        </header>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            <a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
                        </p>

                    </div>

                </article>
                        
            </div><!--/.entris-->

            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><span>3</span></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li><a href="#">5</a></li>
                <li><span> ... </span></li>
                <li><a href="#">1234</a></li>
                <li><a href="#">1235</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>

        </div><!--/.col-md-8.col-lg-8.col-xl-9-->

        <div class="sidebar col-md-4 col-lg-4 col-xl-3">

            <aside class="widget">

                <h2 class="widget-title ribbon"><span>Featured Posts</span></h2>

                <div class="entries row">

                    <article class="type-post style-media-list media col-sm-6 col-md-12">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" class="media-object pull-left" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/80x80" alt="">
                        </noscript>

                        <div class="media-body">
                            <h3  class="entry-title">
                                <a href="single.html" rel="bookmark">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Technology</a></span>
                            </div>
                        </div>

                    </article>

                    <article class="type-post style-media-list media col-sm-6 col-md-12">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" class="media-object pull-left" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/80x80" alt="">
                        </noscript>

                        <div class="media-body">
                            <h3  class="entry-title">
                                <a href="single.html" rel="bookmark">Duis aute irure dolor in reprehenderit in voluptate velit esse.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Technology</a></span>
                            </div>
                        </div>

                    </article>

                    <article class="type-post style-media-list media col-sm-6 col-md-12">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" class="media-object pull-left" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/80x80" alt="">
                        </noscript>

                        <div class="media-body">
                            <h3  class="entry-title">
                                <a href="single.html" rel="bookmark">Excepteur sint occaecat cupidatat non proident.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Technology</a></span>
                            </div>
                        </div>

                    </article>

                    <article class="type-post style-media-list media col-sm-6 col-md-12">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" class="media-object pull-left" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/80x80" alt="">
                        </noscript>

                        <div class="media-body">
                            <h3  class="entry-title">
                                <a href="single.html" rel="bookmark">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Technology</a></span>
                            </div>
                        </div>

                    </article>

                    <article class="type-post style-media-list media col-sm-6 col-md-12">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" class="media-object pull-left" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/80x80" alt="">
                        </noscript>

                        <div class="media-body">
                            <h3  class="entry-title">
                                <a href="single.html" rel="bookmark">Duis aute irure dolor in reprehenderit in voluptate velit esse.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Technology</a></span>
                            </div>
                        </div>

                    </article>

                </div>

            </aside><!--/.widget-->

            <aside id="reviewCarousel" class="widget carousel slide">

                <h2 class="widget-title ribbon"><span>Latest Review</span></h2>

                <div class="carousel-inner">
                    <div class="item active">

                        <article class="entry style-grid style-review type-post">
            
                            <header class="entry-header">
                                <h3 class="entry-title"><a href="single.html">xPhone 5s Review</a> </h3>
                                <p class="small">Excepteur sint occaecat cupidatat non proident</p>
                            </header>

                            <div class="style-review-score">
                                81
                            </div>
                                        
                            <figure class="entry-thumbnail">

                                <a href="single.html" class="overlay overlay-primary"></a>

                                <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

                                <!--fallback for no javascript browsers-->
                                <noscript>
                                    <img src="http://placehold.it/720x420" alt="">
                                </noscript>

                            </figure>

                        </article>

                    </div><!--/.item.active-->

                    <div class="item">
                        
                        <article class="entry style-grid style-review type-post">
            
                            <header class="entry-header">
                                <h3 class="entry-title"><a href="single.html">xPhone 5s Review</a> </h3>
                                <p class="small">Excepteur sint occaecat cupidatat non proident</p>
                            </header>

                            <div class="style-review-score">
                                80
                            </div>
                                        
                            <figure class="entry-thumbnail">

                                <a href="single.html" class="overlay overlay-primary"></a>

                                <!-- to disable lazy loading, remove data-src and data-src-retina -->
                                <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

                                <!--fallback for no javascript browsers-->
                                <noscript>
                                    <img src="http://placehold.it/720x420" alt="">
                                </noscript>

                            </figure>

                        </article>

                    </div><!--/.item.active-->

                </div><!--/.carousel-inner-->

                <a class="left carousel-control" href="#reviewCarousel" data-slide="prev">
                    <span class="icon icon-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#reviewCarousel" data-slide="next">
                    <span class="icon icon-angle-right"></span>
                </a>

            </aside><!--/.widget.carousel-->
            
            <aside class="widget">

                <h2 class="widget-title ribbon"><span>What's Hot</span></h2>

                <div class="entries row">

                    <article class="type-post style-media-list media col-sm-6 col-md-12">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" class="media-object pull-left" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/80x80" alt="">
                        </noscript>

                        <div class="media-body">
                            <h3  class="entry-title">
                                <a href="single.html" rel="bookmark">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Technology</a></span>
                            </div>
                        </div>

                    </article>

                    <article class="type-post style-media-list media col-sm-6 col-md-12">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" class="media-object pull-left" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/80x80" alt="">
                        </noscript>

                        <div class="media-body">
                            <h3  class="entry-title">
                                <a href="single.html" rel="bookmark">Duis aute irure dolor in reprehenderit in voluptate velit esse.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Technology</a></span>
                            </div>
                        </div>

                    </article>

                    <article class="type-post style-media-list media col-sm-6 col-md-12">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" class="media-object pull-left" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/80x80" alt="">
                        </noscript>

                        <div class="media-body">
                            <h3  class="entry-title">
                                <a href="single.html" rel="bookmark">Excepteur sint occaecat cupidatat non proident.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Technology</a></span>
                            </div>
                        </div>

                    </article>

                    <article class="type-post style-media-list media col-sm-6 col-md-12">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" class="media-object pull-left" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/80x80" alt="">
                        </noscript>

                        <div class="media-body">
                            <h3  class="entry-title">
                                <a href="single.html" rel="bookmark">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Technology</a></span>
                            </div>
                        </div>

                    </article>

                    <article class="type-post style-media-list media col-sm-6 col-md-12">

                        <!-- to disable lazy loading, remove data-src and data-src-retina -->
                        <img src="{{ asset('assets/vendor/images/placeholder.gif') }}" data-src="http://placehold.it/80x80" data-src-retina="http://placehold.it/160x160" width="80" height="80" class="media-object pull-left" alt="">

                        <!--fallback for no javascript browsers-->
                        <noscript>
                            <img src="http://placehold.it/80x80" alt="">
                        </noscript>

                        <div class="media-body">
                            <h3  class="entry-title">
                                <a href="single.html" rel="bookmark">Duis aute irure dolor in reprehenderit in voluptate velit esse.</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">September 20 2013</time></a></span>
                                <span class="category">In <a href="blog.html">Technology</a></span>
                            </div>
                        </div>

                    </article>

                </div>

            </aside><!--/.widget-->

            <aside class="widget">

                <h3 class="widget-title ribbon"><span>Latest Discussion</span></h3>

                <ul class="entries">

                    <li class="entry style-recent-list type-post">

                        <span class="comments-count-balloon">900</span>
                        <a href="single.html" rel="bookmark" class="entry-title">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>

                    </li>

                    <li class="entry style-recent-list type-post">

                        <span class="comments-count-balloon">860</span>
                        <a href="single.html" rel="bookmark" class="entry-title">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                
                    </li>

                    <li class="entry style-recent-list type-post">

                        <span class="comments-count-balloon">1234</span>
                        <a href="single.html" rel="bookmark" class="entry-title">In voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a>
                                
                    </li>

                    <li class="entry style-recent-list type-post">

                        <span class="comments-count-balloon">90</span>
                        <a href="single.html" rel="bookmark" class="entry-title">Duis aute irure dolor in reprehenderit.</a>
                                
                    </li>

                    <li class="entry style-recent-list type-post">

                        <span class="comments-count-balloon">8</span>
                        <a href="single.html" rel="bookmark" class="entry-title">Utempor incididunt ut labore et dolore magna aliqua.</a>
                                
                    </li>

                </ul>

            </aside><!--/.widget-->

            <aside class="widget">

                <h3 class="widget-title ribbon"><span>Special Coverage</span></h3>

                <ul class="entries coverageList aligncenter">
                    <li><a href="blog.html">#xPhone launch event</a></li>
                    <li><a href="blog.html">#WCDC 2013</a></li>
                    <li><a href="blog.html">#Nokiem bought by Macrosoft</a></li>
                    <li><a href="blog.html">#Blueberry JUMP 2013</a></li>
                    <li><a href="blog.html">#CONFEST 2013</a></li>
                    <li><a href="blog.html">#Ullamco laboris nisi ut. </a></li>
                    <li><a href="blog.html">#Eliquip ex ea commodo consequat.</a></li>
                    <li><a href="blog.html">#Duis aute irure dolor in.</a></li>
                    <li><a href="blog.html">#Reprehenderit in voluptate</a></li>
                    <li><a href="blog.html">#Velit esse Ullamco laboris.</a></li>
                </ul>

            </aside><!--/.widget-->

            <aside class="widget">

                <h3 class="widget-title ribbon"><span>Tags</span></h3>

                <div class="tagcloud">
                    <a href="#">Some</a>
                    <a href="#">Tag</a>
                    <a href="#">Goes</a>
                    <a href="#">Here</a>
                    <a href="#">Utempor</a>
                    <a href="#">Incididunt</a>
                    <a href="#">Labore</a>
                    <a href="#">Dolore</a>
                    <a href="#">Magna</a>
                    <a href="#">Aliqua</a>
                    <a href="#">Seddo</a> 
                    <a href="#">Siusmod</a>
                    <a href="#">Tempor</a>
                    <a href="#">Incididunt</a>
                    <a href="#">Ut labore</a>
                    <a href="#">Et dolore </a>
                    <a href="#">Magna </a>
                    <a href="#">Aliqua</a>
                </div>

            </aside><!--/.widget-->

        </div><!--/.sidebar col-md-4 col-lg-4 col-xl-3-->

    </div><!--/#content-->			
</div><!--#main.container-->
@endsection