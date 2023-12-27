@extends('layouts.customer.main')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <a class="home" href="{{ url('/blog') }}" title="Blog">Blog</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span> {{ $article->title }}</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
                <div class="column col-xs-12 col-sm-3" id="left_column">
                    <!-- Blog category -->
                    <div class="block left-module">
                        <p class="title_block">Blog Categories</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <ul class="tree-menu">
                                        @foreach ($allCategories as $article_category)
                                            <li>
                                                <span></span>
                                                <a
                                                    href="{{ url('blog/category/' . $article_category->slug) }}">{{ $article_category->name }}</a>
                                                ({{ $article_category->articles->count() }})
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./blog category  -->
                    <!-- Popular Posts -->
                    <div class="block left-module">
                        <p class="title_block">Popular Posts</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="blog-list-sidebar clearfix">
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img
                                                        src="{{ asset('customer/assets/data/blog-thumb1.jpg') }}"
                                                        alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a>
                                                </h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                        <i class="fa fa-comment-o"></i> 3
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img
                                                        src="{{ asset('customer/assets/data/blog-thumb2.jpg') }}"
                                                        alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a>
                                                </h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                        <i class="fa fa-comment-o"></i> 3
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img
                                                        src="{{ asset('customer/assets/data/blog-thumb3.jpg') }}"
                                                        alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a>
                                                </h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                        <i class="fa fa-comment-o"></i> 3
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./Popular Posts -->
                    <!-- Banner -->
                    <div class="block left-module">
                        <div class="banner-opacity">
                            <a href="#"><img src="{{ asset('customer/assets/data/slide-left.jpg') }}"
                                    alt="ads-banner"></a>
                        </div>
                    </div>
                    <!-- ./Banner -->

                    <!-- tags -->
                    <div class="block left-module">
                        <p class="title_block">TAGS</p>
                        <div class="block_content">
                            <div class="tags">
                                @foreach ($allTags as $tag)
                                    <a href="{{ url('blog/tag/' . $tag->slug) }}"><span
                                            class="level1">{{ $tag->name }}</span></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- ./tags -->
                    <!-- Banner -->
                    <div class="block left-module">
                        <div class="banner-opacity">
                            <a href="#"><img src="{{ asset('customer/assets/data/slide-left2.jpg') }}"
                                    alt="ads-banner"></a>
                        </div>
                    </div>
                    <!-- ./Banner -->
                </div>
                <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <h1 class="page-heading">
                        <span class="page-heading-title2">{{ $article->title }}</span>
                    </h1>
                    <article class="entry-detail">
                        <div class="entry-meta-data">
                            <span class="date"><i class="fa fa-calendar"></i>
                                {{ $article->created_at->format('F j, Y') }}
                            </span>
                        </div>
                        <div class="entry-photo">
                            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
                        </div>
                        <div class="content-text clearfix">
                            {!! $article->content !!}
                        </div>
                        <div class="entry-tags">
                            <span>Tags:</span>
                            @foreach ($article->tags as $tag)
                                <a href="{{ url('blog/tag/' . $tag->slug) }}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </article>
                    <!-- Related Posts -->
                    <div class="single-box">
                        <h2>Related Posts</h2>
                        <ul class="related-posts owl-carousel" data-dots="false" data-loop="true" data-nav = "true"
                            data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true"
                            data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                            @foreach ($relatedArticles as $relatedArticle)
                                <li class="post-item">
                                    <article class="entry">
                                        <div class="entry-thumb image-hover2">
                                            <a href="#">
                                                <img src="{{ Storage::url($relatedArticle->image) }}"
                                                    alt="{{ $relatedArticle->title }}">
                                            </a>
                                        </div>
                                        <div class="entry-ci">
                                            <h3 class="entry-title">
                                                <a
                                                    href="{{ url('blog/' . $relatedArticle->slug) }}">{{ $relatedArticle->title }}</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- ./Related Posts -->
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection
