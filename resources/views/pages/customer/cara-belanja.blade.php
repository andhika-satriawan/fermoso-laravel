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
                <span> Cara Belanja</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-12" id="center_column">
                    <h1 class="page-heading">
                        <span class="page-heading-title2">Cara Belanja</span>
                    </h1>
                    <article class="entry-detail">
                        <div class="entry-photo">
                            <img src="{{ asset('customer/assets/data/blog-full.jpg') }}" alt="Cara Belanja">
                        </div>
                        <div class="content-text clearfix">
                            <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et
                                urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit
                                amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                                Ut tellus dolor, dapibus eget, elementum vel.</p>

                            <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu
                                lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus
                                eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>

                            <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a
                                    href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus.
                                Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et
                                ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue
                                nec augue. </p>

                            <p>Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa.
                                Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus
                                non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis
                                lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum
                                nisl. </p>
                            <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu
                                lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus
                                eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>

                            <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a
                                    href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus.
                                Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et
                                ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue
                                nec augue. </p>
                        </div>
                    </article>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection
