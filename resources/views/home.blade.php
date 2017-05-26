@extends('layouts.default')

@section('content')
<div id="main" class="container">
    <div id="content" class="content section row">
        <div class="col-md-9 col-lg-9">
            <div class="row">
                <div class="col-md-4 col-lg-4 md-pull-right">
                    <aside class="widget">
                        <h3 class="widget-title ribbon ribbon-focus"><span>Latest Discussion</span></h3>
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

                    <aside class="widget widget_calendar">
                        <h3 class="widget-title ribbon"><span>Calendar</span></h3>
                        <div id="calendar_wrap">
                            <table id="wp-calendar">
                                <caption id="year_month"></caption>
                                <thead>
                                    <tr>
                                        <th scope="col" title="Sunday">S</th>
                                        <th scope="col" title="Monday">M</th>
                                        <th scope="col" title="Tuesday">T</th>
                                        <th scope="col" title="Wednesday">W</th>
                                        <th scope="col" title="Thursday">T</th>
                                        <th scope="col" title="Friday">F</th>
                                        <th scope="col" title="Saturday">S</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" id="prev"><a href="javascript:void(0);" title="View posts for March 2013"></a></td>
                                        <td class="pad">&nbsp;</td>
                                        <td colspan="3" id="next"><a href="javascript:void(0);" title="View posts for March 2013"></a></td>
                                    </tr>
                                </tfoot>
                                <tbody id="calendar">
                                    
                                </tbody>
                            </table>
                        </div>
                    </aside>
                </div><!--/.col-md-4.col-lg-4.md-pull-right-->

                <div class="bg-base col-md-8 col-lg-8">
                    <h2 class="section-title ribbon ribbon-highlight"><span>热门</span></h2>
                    <div class="entries">
                        @foreach($data['articles'] as $article)
                        <article class="entry style-large type-post">
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
                            </p>
                        </article>
                        @endforeach
                    </div>
                </div><!--/.bg-base.col-md-8.col-lg-8-->
            </div><!--/.colheight-->
        </div><!--/.col-md-8.col-lg-4-->
        <div class="sidebar col-md-3 col-lg-3">
            <div class="collapsible-widgets">
                <aside class="widget">
                    <h2 class="widget-title ribbon"><span>Top Smartphone</span></h2>

                    <ul class="entries">
                        <li class="entry style-score-widget">
                            <div class="score-label entry-title"><a href="single-full.html">xPhone 15s</a></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 81%;">
                                    <span>Score:&nbsp;81</span>
                                </div>
                            </div>
                        </li>
                        <li class="entry style-score-widget">
                            <div class="score-label entry-title"><a href="single-full.html">Droid Maxxi</a></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span>Score:&nbsp;50</span>
                                </div>
                            </div>
                        </li>
                        <li class="entry style-score-widget">
                            <div class="score-label entry-title"><a href="single-full.html">Performance</a></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                    <span>Score:&nbsp;76</span>
                                </div>
                            </div>
                        </li>
                        <li class="entry style-score-widget">
                            <div class="score-label entry-title"><a href="single-full.html">NFC Dragonfly</a></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                    <span>Score:&nbsp;75</span>
                                </div>
                            </div>
                        </li>
                        <li class="entry style-score-widget">
                            <div class="score-label entry-title"><a href="single-full.html">Andromeda Titan</a></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                    <span>Score:&nbsp;70</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </aside>
                <aside class="widget">
                    <h2 class="widget-title ribbon"><span>Top Notebook</span></h2>
                    <ul class="entries">
                        <li class="entry style-score-widget">
                            <div class="score-label entry-title"><a href="single-full.html">xPhone 15s</a></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 81%;">
                                    <span>Score:&nbsp;81</span>
                                </div>
                            </div>
                        </li>
                        <li class="entry style-score-widget">
                            <div class="score-label entry-title"><a href="single-full.html">Droid Maxxi</a></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span>Score:&nbsp;80</span>
                                </div>
                            </div>
                        </li>
                        <li class="entry style-score-widget">
                            <div class="score-label entry-title"><a href="single-full.html">Performance</a></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                    <span>Score:&nbsp;76</span>
                                </div>
                            </div>
                        </li>
                        <li class="entry style-score-widget">
                            <div class="score-label entry-title"><a href="single-full.html">NFC Dragonfly</a></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                    <span>Score:&nbsp;75</span>
                                </div>
                            </div>
                        </li>
                        <li class="entry style-score-widget">
                            <div class="score-label entry-title"><a href="single-full.html">Andromeda Titan</a></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                    <span>Score:&nbsp;70</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </aside>
            </div>
            <aside class="widget">
                <h3 class="widget-title ribbon ribbon-focus"><span>标签</span></h3>
                <div class="tagcloud">
                    @foreach($data['tags'] as $tag)
                    <a href="#">{{ $tag->name }}</a>
                    @endforeach
                </div>
            </aside><!--/.widget-->
        </div><!--/.sidebar.col-md-3.col-lg-3-->
    </div><!--/.row.content-->
    <div id="coverageCarousel" class="section bg-primary carousel carousel slide">
        <h2 class="section-title ribbon ribbon-highlight"><span>&nbsp;</span></h2>
        <div class="carousel-inner">
            <div class="item active">
                <h2 class="section-title ribbon ribbon-highlight"><a href="blog.html"> xPhone launch event</a></h2>
                <div class="row entries">
                    <article class="entry style-grid type-post col-md-6 col-lg-3 colheight-sm-1">
                        <header class="entry-header">
                            <p class="small"><a href="blog.html">Review</a></p>
                            <h3 class="entry-title"><a href="single.html">xPhone first hand: Check out, this might be the right phone for you</a> </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                                <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                            </div>
                        </header>
                        <figure class="entry-thumbnail">
                            <a href="single.html" class="overlay overlay-primary"></a>
                            <!-- to disable lazy loading, remove data-src and data-src-retina -->
                            <img src="../img/placeholder.gif" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">
                            <!--fallback for no javascript browsers-->
                            <noscript>
                                <img src="http://placehold.it/480x280" alt="">
                            </noscript>
                        </figure>
                    </article>
                    <article class="entry style-grid type-post col-md-6 col-lg-3 colheight-sm-1">
                        <header class="entry-header">
                            <p class="small"><a href="blog.html">Event Report</a></p>
                            <h3 class="entry-title"><a href="single.html">The rumor was not a joke, lorem ispsum dolor sit amet constactetiour.</a> </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                                <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                            </div>
                        </header>
                        
                        <figure class="entry-thumbnail">

                            <a href="single.html" class="overlay overlay-primary"></a>

                            <!-- to disable lazy loading, remove data-src and data-src-retina -->
                            <img src="../img/placeholder.gif" data-src="http://placehold.it/680x452" data-src-retina="http://placehold.it/1024x680" width="680" height="452" alt="">

                            <!--fallback for no javascript browsers-->
                            <noscript>
                                <img src="http://placehold.it/680x452" alt="">
                            </noscript>

                        </figure>

                    </article>

                    <article class="entry style-grid type-post col-md-6 col-lg-3 colheight-sm-1">
                        <header class="entry-header">
                            <p class="small"><a href="blog.html">Event Report</a></p>
                            <h3 class="entry-title"><a href="single.html">The Event is starting Now. Grab your popcorn, beer and notes.</a> </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                                <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                            </div>
                        </header>
                        
                        <figure class="entry-thumbnail">

                            <a href="single.html" class="overlay overlay-primary"></a>

                            <!-- to disable lazy loading, remove data-src and data-src-retina -->
                            <img src="../img/placeholder.gif" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

                            <!--fallback for no javascript browsers-->
                            <noscript>
                                <img src="http://placehold.it/480x280" alt="">
                            </noscript>

                        </figure>

                    </article>

                    <article class="entry style-grid type-post col-md-6 col-lg-3 colheight-sm-1">
                        <header class="entry-header">
                            <p class="small"><a href="blog.html">Speculation</a></p>
                            <h3 class="entry-title"><a href="single.html">Rumor: The long awaited update for Retina Display is ready to be annaunced on the next event held by them</a> </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                                <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                            </div>
                        </header>
                        
                        <figure class="entry-thumbnail">

                            <a href="single.html" class="overlay overlay-primary"></a>

                            <!-- to disable lazy loading, remove data-src and data-src-retina -->
                            <img src="../img/placeholder.gif" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

                            <!--fallback for no javascript browsers-->
                            <noscript>
                                <img src="http://placehold.it/480x280" alt="">
                            </noscript>

                        </figure>

                    </article>

                </div><!--/.row.entries-->

            </div><!--/.item-->
            <div class="item">
                <h2 class="section-title ribbon ribbon-highlight"><a href="blog.html"> #WCDC 2013</a></h2>
                
                <div class="row entries">

                    <article class="entry style-grid type-post col-md-6 col-lg-3 colheight-sm-1">
                        <header class="entry-header">
                            <p class="small"><a href="blog.html">Event Report</a></p>
                            <h3 class="entry-title"><a href="single.html">The Event is starting Now. Grab your popcorn, beer and notes.</a> </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                                <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                            </div>
                        </header>
                        
                        <figure class="entry-thumbnail">

                            <a href="single.html" class="overlay overlay-primary"></a>

                            <!-- to disable lazy loading, remove data-src and data-src-retina -->
                            <img src="../img/placeholder.gif" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

                            <!--fallback for no javascript browsers-->
                            <noscript>
                                <img src="http://placehold.it/480x280" alt="">
                            </noscript>

                        </figure>

                    </article>

                    <article class="entry style-grid type-post col-md-6 col-lg-3 colheight-sm-1">
                        <header class="entry-header">
                            <p class="small"><a href="blog.html">Speculation</a></p>
                            <h3 class="entry-title"><a href="single.html">Rumor: The long awaited update for Retina Display is ready to be annaunced on the next event held by them</a> </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                                <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                            </div>
                        </header>
                        
                        <figure class="entry-thumbnail">

                            <a href="single.html" class="overlay overlay-primary"></a>

                            <!-- to disable lazy loading, remove data-src and data-src-retina -->
                            <img src="../img/placeholder.gif" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

                            <!--fallback for no javascript browsers-->
                            <noscript>
                                <img src="http://placehold.it/480x280" alt="">
                            </noscript>

                        </figure>

                    </article>

                    <article class="entry style-grid type-post col-md-6 col-lg-3 colheight-sm-1">
                        
                        <header class="entry-header">
                            <p class="small"><a href="blog.html">Review</a></p>
                            <h3 class="entry-title"><a href="single.html">xPhone first hand: Check out, this might be the right phone for you</a> </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                                <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                            </div>
                        </header>
                        
                        <figure class="entry-thumbnail">

                            <a href="single.html" class="overlay overlay-primary"></a>

                            <!-- to disable lazy loading, remove data-src and data-src-retina -->
                            <img src="../img/placeholder.gif" data-src="http://placehold.it/480x280" data-src-retina="http://placehold.it/720x420" width="480" height="280" alt="">

                            <!--fallback for no javascript browsers-->
                            <noscript>
                                <img src="http://placehold.it/480x280" alt="">
                            </noscript>

                        </figure>

                    </article>

                    <article class="entry style-grid type-post col-md-6 col-lg-3 colheight-sm-1">

                        <header class="entry-header">
                            <p class="small"><a href="blog.html">Event Report</a></p>
                            <h3 class="entry-title"><a href="single.html">The rumor was not a joke, lorem ispsum dolor sit amet constactetiour.</a> </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">20 hours ago</time></a></span>
                                <span class="entry-author"> by <a href="blog.html">John Doe</a></span>
                            </div>
                        </header>
                        
                        <figure class="entry-thumbnail">

                            <a href="single.html" class="overlay overlay-primary"></a>

                            <!-- to disable lazy loading, remove data-src and data-src-retina -->
                            <img src="../img/placeholder.gif" data-src="http://placehold.it/680x452" data-src-retina="http://placehold.it/1024x680" width="680" height="452" alt="">

                            <!--fallback for no javascript browsers-->
                            <noscript>
                                <img src="http://placehold.it/680x452" alt="">
                            </noscript>

                        </figure>

                    </article>

                </div><!--/.row.entries-->

            </div><!--/.item-->
        </div><!--/.carousel-inner-->

        <a class="left carousel-control" href="#coverageCarousel" data-slide="prev">
            <span class="icon icon-angle-left"></span>
        </a>
        <a class="right carousel-control" href="#coverageCarousel" data-slide="next">
            <span class="icon icon-angle-right"></span>
        </a>

    </div>
</div><!--#main.container-->
<script>
    var monthArr = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    function view_calendar(year, month)
    {
        $("#year_month").html(monthArr[month] + "  " + year);

        var myDate = new Date(year, month, 1);
        var empty = myDate.getDay();
        var maxDays = new Date(year, month + 1, 0).getDate();

        var html = '';
        var addEmpty = true
        var number = 1
        var weekDays = 7
        for (var i = 0; i < Math.ceil((maxDays + empty) / weekDays); i++) {
            html = html + "<tr>";
            for (var count = 0;  count < weekDays; count++) {
                if (count < empty && addEmpty) {
                    html = html + "<td>" + "</td>";
                    continue;
                }
                
                var curDate = new Date()
                var curYear = curDate.getFullYear();
                var curMonth = curDate.getMonth();
                var curDay = curDate.getDate(); 
                if (number == date.getDate() && month == curMonth && year == curYear && number == curDay) {
                    html = html + "<td id='today'>" + number + "</td>";   
                }else{
                    html = html + "<td>" + number + "</td>";   
                }

                number = number + 1;
                if (count == weekDays) {
                    html = html + '<td class="pad" colspan="4">&nbsp;</td></tr>';
                }

                if (maxDays < number) {
                    break;
                }
            }
            addEmpty = false;
        }

        $("#calendar").html(html)
    }

    function refresh(year, month, func)
    {
        if (month < 0) {
            month = 11;
            year = year - 1;
        }

        if (month > 11) {
            month = 1;
            year = year + 1;
        }
        
        func(year, month)
    }

    function set_prev_next(year, month)
    {   
        var nextMonth = monthArr[month + 1 > 11 ? 1 : month + 1];
        var prevMonth = monthArr[month - 1 < 0 ? 11 : month - 1];
        $("#prev > a").html("&laquo; " + prevMonth);
        $("#prev > a").one("click", function(){
            refresh(year, month - 1, function(y, m){
                view_calendar(y, m);
                set_prev_next(y, m);
            });
        });

        $("#next > a").html(nextMonth + " &raquo;");
        $("#next > a").one("click", function(){
            refresh(year, month + 1, function(y, m){
                view_calendar(y, m);
                set_prev_next(y, m);
            });
        });
    }

    var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth();

    view_calendar(year, month)
    set_prev_next(year, month);
</script>

@endsection