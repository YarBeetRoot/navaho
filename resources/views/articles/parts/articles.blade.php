<div class="col-md-8">
    <div class="blog-archive-left">
        <!-- Start blog news single -->
        @foreach($articles as $article)
        <article class="blog-news-single">
            <div class="blog-news-img">
                <a href="/articles/{{ $article->id }}"><img src="{{ $article->thumbnail }}" alt="image"></a>
            </div>
            <div class="blog-news-title">
                <h2><a href="blog-single-with-right-sidebar.html">{{ $article->title }}</a></h2>
                <p>By <a class="blog-author" href="#">{{ $article->author }}</a> <span class="blog-date">|18 October 2015</span></p>
            </div>
            <div class="blog-news-details">
                <p>{{ $article->text }}</p>
                <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">Read More <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </article>
        @endforeach
        <!-- Start blog pagination -->
        <div class="blog-pagination">
            <ul class="pagination-nav">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
            </ul>
        </div>
    </div>
</div>