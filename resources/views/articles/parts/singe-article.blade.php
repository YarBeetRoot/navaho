<div class="col-md-8">
    <div class="blog-archive-left">
        <!-- Start blog news single -->
        <article class="blog-news-single">
            <div class="blog-news-img">
                <img src="{{ asset('storage/'.$article->thumbnail) }}" alt="image">
            </div>
            <div class="blog-news-title">
                <h2>{{ $article->title }}</h2>
                <p>By <a class="blog-author" href="#">{{ $article->author }}</a> <span class="blog-date">|18 October 2015</span></p>
            </div>
            <div class="blog-news-details blog-single-details">
                {!! $article->text !!}
                <div class="blog-single-bottom">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="blog-single-tag">
                                <span class="fa fa-tags"></span>
                                <a href="#">Design,</a>
                                <a href="#">Photoshop,</a>
                                <a href="#">Development</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog-single-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <!-- Start blog navigation -->
        <div class="blog-navigation-area">
            <div class="blog-navigation-prev">
                <a href="#">
                    <h5>All about writing story</h5>
                    <span>Previous Post</span>
                </a>
            </div>
            <div class="blog-navigation-next">
                <a href="#">
                    <h5>All about friends story</h5>
                    <span>Next Post</span>
                </a>
            </div>
        </div>
        @include('articles.parts.comments-form')
    </div>
</div>