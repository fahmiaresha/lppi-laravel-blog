@extends('layouts.template')
@section('title','Blog')
@section('head')

@endsection

@section('content')
<section id="in-breadcrumb" class="in-breadcrumb-section">
    <div class="in-breadcrumb-content position-relative" data-background="assets/img/bg/error-bg.jpg">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="in-breadcrumb-title-content position-relative headline ul-li">
                <h2>Blog </h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="active-page">Blog </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="in-blog-grid" class="in-blog-grid-section">
    <div class="container">
        <div class="blog-grid-content">
            <div class="row justify-content-center">
                @foreach($blog as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="in-blog-item">
                        <div class="blog-title headline">
                            <h3><a href="#" tabindex="0">{{ $post->title }}</a></h3>
                        </div>
                        <div class="blog-img">
                            <img src="{{ $post->image_url }}" alt="">
                        </div>
                        <div class="blog-meta-text">
                            <div class="in-meta">
                                <a href="#" tabindex="0"><i class="far fa-calendar-check"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</a>
                                <a href="#" tabindex="0"><i class="far fa-file-alt"></i> {{ $post->category_name }}</a>
                            </div>
                            <div class="in-blog-text" style="text-align: justify;">
                                {{ $post->content }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="in-pagination text-center ul-li">
                <ul>
                    <li><a href="#"><i class="far fa-long-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="far fa-long-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Comments Section -->
<!-- <section id="comments" class="comments-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Comments</h3>
                <ul class="comments-list">
                    @foreach($blog  as $comment)
                    <li class="comment">
                        <div class="comment-body">
                            <h4 class="comment-author">{{ $comment->user_name }}</h4>
                            <a href="#" tabindex="0"><i class="far fa-calendar-check"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</a>
                            <p class="comment-content">{{ $comment->content }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
 
            </div>
        </div>
    </div>
</section> -->
<!-- End Comments Section -->

@endsection

@section('script')

@endsection