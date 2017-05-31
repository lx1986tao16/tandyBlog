@extends('layouts.default')

@section('content')

<div id="main" class="container">
    <div id="content" class="content section row">

        <div class="col-md-8 bg-base col-lg-8 col-xl-9">

            <div class="ribbon ribbon-highlight">
                <ol class="breadcrumb ribbon-inner">
                    <li><a href="#">Home</a></li>
                    @if($data['category']->parent)
                    <li><a href="#">{{ $data['category']->parent->name }}</a></li>
                    @endif
                    <li class="active">{{ $data['category']->name }}</li>
                </ol>
            </div>
            
            <div class="entries">
                @foreach($data['articles'] as $article)
                <article class="entry style-media media type-post">
                    <div class="media-body">
                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="single.html" rel="bookmark">{{ $article->title }}</a>
                            </h3>
                            <div class="entry-meta">
                                <span class="author">by <a href="blog.html">{{ $article->author }}</a></span>
                                <span class="entry-date"><a href="blog.html">on <time datetime="2013-07-04T23:26:34+00:00">{{ $article->created_at }}</time></a></span>
                                <span class="category">In <a href="blog.html">{{ $article->category->name }}</a></span>
                            </div>
                        </header>
                        <p>
                            {!! str_limit(strip_tags($article->content), '200', '...') !!}
                            <a href="single.html" class="more-link">Continue Reading<i class="icon icon-long-arrow-right"></i></a>
                        </p>
                    </div>
                </article>
                @endforeach
            </div><!--/.entris-->

            {!! $data['articles']->links() !!}

        </div><!--/.col-md-8.col-lg-8.col-xl-9-->
        <div class="sidebar col-md-4 col-lg-4 col-xl-3">
            <aside id="reviewCarousel" class="widget carousel slide">
                <h2 class="widget-title ribbon"><span>Latest Review</span></h2>
                <div class="carousel-inner">
                    <div class="item active">
                        <article class="entry style-grid style-review type-post">
                            <header class="entry-header">
                                <h3 class="entry-title"><a href="single.html">xPhone 5s Review</a></h3>
                                <p class="small">Excepteur sint occaecat cupidatat non proident</p>
                            </header>
                            <div class="style-review-score">81</div>
                        </article>
                    </div><!--/.item.active-->
                    <div class="item">
                        <article class="entry style-grid style-review type-post">
                            <header class="entry-header">
                                <h3 class="entry-title"><a href="single.html">xPhone 5s Review</a></h3>
                                <p class="small">Excepteur sint occaecat cupidatat non proident</p>
                            </header>
                            <div class="style-review-score">80</div>
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
            
            @include('shared.new')
            @include('shared.tags')
        </div><!--/.sidebar col-md-4 col-lg-4 col-xl-3-->
    </div><!--/#content-->
</div>

@endsection