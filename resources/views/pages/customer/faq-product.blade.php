@extends('layouts.customer.main')

@section('title')
    {{ $faqs[0]->title }}
@endsection

@push('addon-style')
    <style>
        .content-text p {
            margin-bottom: 10px;
        }

        article.entry-detail h2 {
            margin-bottom: 14px;
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
                <span> {{ $faqs[0]->title }}</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-12 col-lg-10" id="center_column">
                    <h1 class="page-heading">
                        <span class="page-heading-title2">{{ $faqs[0]->title }}</span>
                    </h1>
                    <article class="entry-detail">
                        <div class="entry-photo">
                            <img src="{{ Storage::url($faqs[0]->image) }}" alt="{{ $faqs[0]->title }}">
                        </div>
                        <div class="content-text clearfix">
                            {!! $faqs[0]->content !!}
                        </div>
                    </article>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection
