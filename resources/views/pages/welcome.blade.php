@extends('main')

@section('title', '| Homepage')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>This is Data Traveler!</h1>
                    <p class="lead">I am Brunno, thank you so much for visiting!</p>
                    <p class="lead">Welcome to <b>Data Traveler</b>, a blog about Statistics and Data Science. Here I will share my works and thoughts about many subjects as Machine Learning, Big Data, Analytics, Data Enginnering and so much more.</p>
                    <p class="lead">Feel free to know a little bit more about myself in <a href="/about">About</a> section and to reach me out through <a href="/contact">Contact</a>.</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Latest Post</a></p>
                </div>
            </div>
        </div> <!-- end of header row -->

        <div class="row">
            <div class="col-md-8">

                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr(strip_tags(str_replace('&nbsp;', ' ', $post->body)), 0, 300) }}{{ strlen(strip_tags(str_replace('&nbsp;', ' ', $post->body))) > 300 ? "..." : "" }}</p>
                        <a href="{{ url('blog', $post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                @endforeach


            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
@endsection

