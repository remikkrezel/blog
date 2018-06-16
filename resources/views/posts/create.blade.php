@extends('layout')

@section('content')
    <div class="container">
        @include('partials.header')
        @include('partials.nav')

        <div class="row mt-5">
            <div class="col-md-12">
                <h1>Publish a post</h1>
                <form method="POST" action="/posts" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="body">Body:</label>
                        <textarea name="body" id="body" rows="10" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="category">Select category:</label>
                        <select class="form-control" id="category" name="category" required>
                            <option>HTML</option>
                            <option>CSS</option>
                            <option>JAVASCRIPT</option>
                            <option>PHP</option>
                            <option>Laravel</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image">Choose image:</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                    </div>

                    @include('partials.errors')


                </form>
            </div>
        </div>
    </div>
@endsection