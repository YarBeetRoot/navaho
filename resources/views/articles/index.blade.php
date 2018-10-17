@extends('layouts.main')

@section('content')

    @include('articles.parts.page-header')

    <!-- Start blog archive -->
    <section id="blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-archive-area">
                        <div class="row">
                            @isset($article)
                                @include('articles.parts.singe-article')
                            @else
                                @include('articles.parts.articles')
                            @endisset

                            @include('articles.parts.sidebar')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog archive -->

@endsection