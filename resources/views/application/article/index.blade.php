@extends('layouts.article')

@section('title'){{ getTitle($article) }}@endsection
@section('description'){{ getDescription($article) }}@endsection

@section('content')
<div class="container am-post">
  <div class="row">
    <div class="col-md-1 text-center text-md-left am-social-share-slider">
      <div class="am-social-share-container follow-scroll">
      <div class="am-radial-black-button" data-share="1"><i class="fas fa-reply"></i></div>
      <div class="am-social-share" data-share="1">
        <a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo 'some'; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a class="tw" href="https://twitter.com/intent/tweet?url=<?php echo 'some'; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
        <a class="tl" href="https://telegram.me/share/url?url=<?php echo 'some'; ?>" target="_blank"><i class="fab fa-telegram"></i></a>
        <a class="lk" href="https://www.linkedin.com/shareArticle?url=<?php echo 'some'; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
      </div>
      </div>
    </div>
    <div class="col-md-11">
        {!! $article->content !!}
    </div>
  </div>
</div>
@endsection