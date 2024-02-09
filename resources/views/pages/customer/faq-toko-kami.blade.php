@extends('layouts.customer.main')

@section('title')
    {{ $faqs[1]->title }}
@endsection

@push('addon-style')
    <style>
        .content-text p {
            margin-bottom: 10px;
        }

        article.entry-detail h2 {
            margin-bottom: 14px;
        }

        .entry-photo {
            margin: 25px 0;
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
                <span> {{ $faqs[1]->title }}</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-12 col-lg-10" id="center_column">
                    <h1 class="page-heading">
                        <span class="page-heading-title2">{{ $faqs[1]->title }}</span>
                    </h1>
                    <article class="entry-detail">
                        <div class="entry-photo">
                            <img src="{{ Storage::url($faqs[1]->image) }}" alt="{{ $faqs[1]->title }}">
                        </div>
                        <div class="content-text clearfix">
                            {!! $faqs[1]->content !!}
                        </div>
                    </article>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection
