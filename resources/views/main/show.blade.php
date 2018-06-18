@extends('layout')
@section('stylesheets')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
@endsection

@section('content')

    <div class="container">
        @include('partials.header')
        @include('partials.nav')
    </div>

    <section>
        <article>
            <div class="container">

                @if(!empty($post->image))
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('uploads/') }}/{{ $post->image }}" class="img-fluid" alt="1110x560" style="height: 560px; width: 100%; border-radius: 5px;">
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <div class="article-background">
                            <div style="padding-top: 20px"><a href="#" class="post-category">{{ $post->category }}</a></div>
                            <p>Created by: {{ $post->user->name }}</p>
                            <h3 style="text-align: center;">{{ $post->title }}</h3>
                            <h5 style="text-align: center;">{{ $post->created_at }}</h5>
                            <p class="post">{{ $post->body }}</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        @include('partials.comments')
                    </div>

                </div>
            </div>
        </article>
    </section>

        @include('partials.footer')
@endsection