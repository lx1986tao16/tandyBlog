@extends('layouts.default')

@section('content')
<div id="main" class="container">
    <div id="content" class="content section row">
        <div class="col-md-9 col-lg-9">
            <div class="row">
                <div class="col-md-4 col-lg-4 md-pull-right">
                    @include('shared.new')

                    <aside class="widget widget_calendar">
                        <h3 class="widget-title ribbon"><span>日历</span></h3>
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
                        @foreach($data['hot_articles'] as $article)
                        <article class="entry style-large type-post">
                            <header class="entry-header">
                                <h3 class="entry-title">
                                    <a href="single.html" rel="bookmark">{{ $article->title }}</a>
                                </h3>
                                <div class="entry-meta">
                                    <span class="author">by <a href="javascript:void(0);">{{ $article->author }}</a></span>
                                    <span class="entry-date"><a href="javascript:void(0);">on <time datetime="2013-07-04T23:26:34+00:00">{{ $article->created_at }}</time></a></span>
                                    <span class="category">In <a href="">{{ $article->category->name }}</a></span>
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
                    <h2 class="widget-title ribbon"><span>分类比列</span></h2>
                    <ul class="entries">
                        @foreach($data['categories'] as $category)
                        @if($category->parent_id == 0)
                        <li class="entry style-score-widget">
                            <div class="score-label entry-title"><a href="single-full.html"></a></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ intval($category->articles_count / $data['articles_total_count'] * 100) }}%;">
                                    <span>{{ $category->name }}比例:&nbsp;{{ intval($category->articles_count / $data['articles_total_count'] * 100) }}</span>
                                </div>
                            </div>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </aside>
            </div>
            @include('shared.tags')
        </div><!--/.sidebar.col-md-3.col-lg-3-->
    </div><!--/.row.content-->
    <div id="coverageCarousel" class="section bg-primary carousel carousel slide">
        <h2 class="section-title ribbon ribbon-highlight"><span>&nbsp;</span></h2>
        <div class="carousel-inner">
            <div class="item active">
                <h2 class="section-title ribbon ribbon-highlight"><a href="blog.html"> 博客</a></h2>
                <div class="row entries">
                    @foreach($data['random_one_articles'] as $article)
                    <article class="entry style-grid type-post col-md-6 col-lg-3 colheight-sm-1">
                        <header class="entry-header">
                            <p class="small"><a href="blog.html">{{ $article->title }}</a></p>
                            <h3 class="entry-title"><a href="single.html">{!! str_limit(strip_tags($article->content), '100', '...') !!}</a> </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">{{ $article->created_at }}</time></a></span>
                                <span class="entry-author"> by <a href="blog.html">{{ $article->author }}</a></span>
                            </div>
                        </header>
                    </article>
                    @endforeach
                </div><!--/.row.entries-->
            </div><!--/.item-->
            <div class="item">
                <h2 class="section-title ribbon ribbon-highlight"><a href="blog.html"> 博客</a></h2>
                <div class="row entries">
                    @foreach($data['random_two_articles'] as $article)
                    <article class="entry style-grid type-post col-md-6 col-lg-3 colheight-sm-1">
                        <header class="entry-header">
                            <p class="small"><a href="blog.html">{{ $article->title }}</a></p>
                            <h3 class="entry-title"><a href="single.html">{!! str_limit(strip_tags($article->content), '100', '...') !!}</a> </h3>
                            <div class="entry-meta">
                                <span class="entry-date"><a href="blog.html"><time datetime="2013-07-04T23:26:34+00:00">{{ $article->created_at }}</time></a></span>
                                <span class="entry-author"> by <a href="blog.html">{{ $article->author }}</a></span>
                            </div>
                        </header>
                    </article>
                    @endforeach
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