<aside class="widget">
    <h3 class="widget-title ribbon ribbon-focus"><span>标签</span></h3>
    <div class="tagcloud">
        @foreach($tags as $tag)
        <a href="#">{{ $tag->name }}</a>
        @endforeach
    </div>
</aside><!--/.widget-->