 <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/">Remigiusz Krężel</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                </a>

                @if (Auth::check())
                <a class="btn btn-sm btn-outline-secondary ml-2" href="#">{{ Auth::user()->name }}</a>
                @else
                    <a class="btn btn-sm btn-outline-secondary mr-2" href="#">Zaloguj się</a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Zarejestruj się</a>
                @endif

            </div>
        </div>
 </header>

