<div class="row mb-2">
        @foreach($posts as $post)
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-300">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">{{ $post->category  }}</strong>
                        <p>Created by: {{ $post->user->name }}</p>
                        <h3 class="mb-0">
                            <a class="text-dark" href="/posts/{{ $post->id }}">{{ $post->title  }}</a>
                        </h3>
                        <div class="mb-1 text-muted">{{ $post->created_at }}</div>
                        <p class="card-text mb-auto">{{ str_limit($post->body, 150) }}</p>
                        <a href="/posts/{{ $post->id }}"><button type="button" class="btn btn-primary"> Przeczytaj całość</button></a>
                    </div>
                    <img style="border-radius: 5px;" class="thumbnail" src="{{asset('uploads/')}}/{{ $post->image }}" alt="Card image cap">
                </div>
            </div>
        @endforeach
</div>


