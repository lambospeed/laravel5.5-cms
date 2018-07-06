@if(!empty($articles))
<div class="row">
    <div class="col-md-12 am-blog-container">
    @foreach($articles as $article)
        <div class="am-blog-item">
            <div class="am-blog-item-img">
                <a href="post.html"><img src="img/blog-1.jpg" alt=""></a>
            </div>
            <div class="am-blog-title">
                <p class="am-blog-date"><span>{{ $article->category->title }}</span> - {{ $article->published_at }}</p>
                <a href="post.html"><h3>{{ $article->title }}</h3></a>
                <div class="am-blog-buttons">
                    <div><a href="post.html" class="am-button" href="#">{{ trans('application.read_more') }} <i class="far fa-arrow-alt-circle-right"></i></a></div>
                    <div><a href="post.html" class="am-button"><i class="fas fa-reply"></i></a></div>
                </div>
            </div>
        </div>
        @if($loop->last)
            @if($articles->hasMorePages() == 1)
            <div class="col-md-12 text-center"><a href="#" id="loadMore" class="am-transp-button" data-url="{{$articles->nextPageUrl()}}">Load more <i class="fas fa-chevron-circle-down"></i><i class="fas fa-spinner spin"></i></a></div>
            @endif
        @endif
    @endforeach
    </div>
</div>
@endif
