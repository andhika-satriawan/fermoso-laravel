@extends('layouts.customer.main')

@section('title')
    Blog
@endsection

@push('addon-style')
    <style>
        .blog-posts .post-item .entry-meta-data {
            padding: 10px 0;
        }
    </style>
@endpush

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">{{ $title }}</span>
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
                                    @foreach ($articles as $article)
                                        <ul class="tree-menu">
                                            @foreach ($article->categories as $article_category)
                                                <li>
                                                    <span></span>
                                                    <a
                                                        href="{{ url('blog/category/' . $article_category->slug) }}">{{ $article_category->name }}</a>
                                                    ({{ $article_category->articles->count() }})
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endforeach
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
                                        @foreach ($popularArticles as $popularArticle)
                                            <li>
                                                <div class="post-thumb">
                                                    <a href="{{ $popularArticle->slug }}">
                                                        <img src="{{ Storage::url($popularArticle->image) }}"
                                                            alt="{{ $popularArticle->title }}">
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <h5 class="entry_title">
                                                        <a
                                                            href="{{ $popularArticle->slug }}">{{ $popularArticle->title }}</a>
                                                    </h5>
                                                    <div class="post-meta">
                                                        <span class="date">
                                                            <i class="fa fa-calendar"></i>
                                                            {{ $article->created_at->format('F j, Y') }}
                                                        </span>
                                                        <span class="comment-count">
                                                            <i class="fa fa-comment-o"></i> 3
                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./Popular Posts -->
                    <!-- Banner -->
                    {{-- <div class="block left-module">
                        <div class="banner-opacity">
                            <a href="#"><img src="{{ asset('customer/assets/data/slide-left.jpg') }}"
                                    alt="ads-banner"></a>
                        </div>
                    </div> --}}
                    <!-- ./Banner -->

                    <!-- tags -->
                    {{-- <div class="block left-module">
                        <p class="title_block">TAGS</p>
                        <div class="block_content">
                            <div class="tags">
                                @foreach ($articles as $article)
                                    @foreach ($article->tags as $tag)
                                        <a href="{{ url('blog/tag/' . $tag->slug) }}"><span
                                                class="level1">{{ $tag->name }}</span></a>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div> --}}
                    <!-- ./tags -->
                    <!-- Banner -->
                    {{-- <div class="block left-module">
                        <div class="banner-opacity">
                            <a href="#"><img src="{{ asset('customer/assets/data/slide-left2.jpg') }}"
                                    alt="ads-banner"></a>
                        </div>
                    </div> --}}
                    <!-- ./Banner -->
                </div>
                <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <h2 class="page-heading">
                        <span class="page-heading-title2">{{ $title }} post</span>
                    </h2>
                    <div class="sortPagiBar clearfix">
                        <span class="page-noite">Showing 1 to 6</span>
                        <div class="bottom-pagination">
                            @if ($articles->hasPages())
                                <div class="pagination-wrapper">
                                    {{ $articles->links('pagination::bootstrap-4') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <ul class="blog-posts">
                        @foreach ($articles as $article)
                            <li class="post-item">
                                <article class="entry">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="entry-thumb image-hover2">
                                                <a href="{{ url('blog/' . $article->slug) }}">
                                                    <img src="{{ Storage::url($article->image) }}"
                                                        alt="{{ $article->title }}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="entry-ci">
                                                <h3 class="entry-title">
                                                    <a
                                                        href="{{ url('blog/' . $article->slug) }}">{{ $article->title }}</a>
                                                </h3>
                                                <div class="entry-meta-data">
                                                    <span class="date">
                                                        <i class="fa fa-calendar"></i>
                                                        {{ $article->created_at->format('F j, Y') }}
                                                    </span>
                                                </div>
                                                {{-- <div class="post-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(7 votes)</span>
                                                </div> --}}
                                                <div class="entry-excerpt">
                                                    {!! $article->summary !!}
                                                </div>
                                                <div class="entry-more">
                                                    <a href="{{ url('blog/' . $article->slug) }}">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        @endforeach
                    </ul>
                    <div class="sortPagiBar clearfix">
                        <div class="bottom-pagination">
                            @if ($articles->hasPages())
                                <div class="pagination-wrapper">
                                    {{ $articles->links('pagination::bootstrap-4') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection

@push('addon-script')
    {{-- <script>
        // Disable Right click
        document.addEventListener('contextmenu', event => event.preventDefault());

        // Disable key down
        document.onkeydown = disableSelectCopy;

        // Disable mouse down
        document.onmousedown = dMDown;

        // Disable click
        document.onclick = dOClick;

        function dMDown(e) {
            return false;
        }

        function dOClick() {
            return true;
        }

        function disableSelectCopy(e) {
            // current pressed key
            var pressedKey = String.fromCharCode(e.keyCode).toLowerCase();
            if ((e.ctrlKey && (pressedKey == "c" || pressedKey == "x" || pressedKey == "v" || pressedKey == "a" ||
                    pressedKey == "u")) || e.keyCode == 123) {
                return false;
            }
        }
    </script> --}}
@endpush
