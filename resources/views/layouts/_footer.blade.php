<footer id="footer" class="footer-area">
    <div class="footer-top container">
        <div class="row">
            <div class="widget col-xs-12 col-sm-4">
                <h4 class="widget-title">Categories</h4>
                <ul class="entries links links-2-cols">
                    @foreach($categories as $category)
                    @if($category->parent_id == 0)
                    <li><a href="blog.html">{{ $category->name }}</a></li>
                    @endif
                    @endforeach
                </ul>
            </div><!--/.col-3-->
            <div class="clearfix visible-xs"></div>
            <div class="widget col-xs-6 col-sm-2">
                <h4 class="widget-title">Information</h4>
                <ul class="entries links links">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Advertise </a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div><!--/.col-3-->
            <div class="widget col-xs-6 col-sm-2">
                <h4 class="widget-title">Follow Us</h4>
                <ul class="entries links">
                    <li><a href="blog.html"><i class="icon-facebook-sign icon-2x"></i> Facebook</a></li>
                    <li><a href="blog.html"><i class="icon-twitter-sign icon-2x"></i> Twitter</a></li>
                    <li><a href="blog.html"><i class="icon-google-plus-sign icon-2x"></i> Google Plus</a></li>
                    <li><a href="blog.html"><i class="icon-linkedin-sign icon-2x"></i> Linkedin</a></li>
                </ul>
            </div><!--/.col-3-->
            <div class="clearfix visible-xs"></div>
            <div class="widget col-xs-12 col-sm-4">
                <h4 class="widget-title">Subscribe</h4>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="subscribeEmail" class="col-lg-2 control-label">EMAIL</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="subscribeEmail" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">RSS</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">
                                <a href=""><i class="icon-rss-sign"></i> Posts</a> &nbsp; &nbsp;
                                <a href=""><i class="icon-rss-sign"></i> Comments</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div><!--/.col-3-->
        </div><!--row.-->
    </div>
    <div class="footer-bottom">
        <div class="container aligncenter">
            <p>&copy;2013 by <a href="http://coolorize.com">Coolorize Network</a>. All Right Reserved. <p>
        </div>
    </div>
</footer>