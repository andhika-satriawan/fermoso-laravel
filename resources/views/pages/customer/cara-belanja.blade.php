@extends('layouts.customer.main')

@section('title')
    Cara Belanja
@endsection

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span>{{ $page->title }}</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-12" id="center_column">
                    <h1 class="page-heading">
                        <span class="page-heading-title2">{{ $page->title }}</span>
                    </h1>
                    <article class="entry-detail">
                        <div class="entry-photo">
                            <img src="{{ Storage::url($page->image) }}" alt="{{ $page->title }}">
                        </div>
                        <div class="content-text clearfix">
                            {!! $page->content !!}
                        </div>
                    </article>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection
