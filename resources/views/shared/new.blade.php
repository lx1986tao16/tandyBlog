<aside class="widget">
    <h3 class="widget-title ribbon ribbon-focus"><span>最新</span></h3>
    <ul class="entries">
        @foreach($articles as $article)
        <li class="entry style-recent-list type-post">
            <span class="comments-count-balloon">{{ $article->hits }}</span>
            <a href="single.html" rel="bookmark" class="entry-title">{{ $article->title }} <br/> {!! str_limit(strip_tags($article->content), '100', '...') !!}</a>
        </li>
        @endforeach
    </ul>
</aside><!--/.widget-->