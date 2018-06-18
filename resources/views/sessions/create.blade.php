@extends('layout')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
                <h1>Zaloguj się</h1>

                <form method="POST" action="/login">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-2 form-control">Zaloguj</button>
                    </div>

                    @include('partials.errors')

                </form>
            </div>
        </div>
    </div>

@endsection