<article>
@foreach($post->comments as $comment)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <img data-src="holder.js/153x153" class="rounded-circle" alt="153x153" style="width: 153px; height: 153px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16409e1c5d5%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16409e1c5d5%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2220%22%20y%3D%2243.5%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                        <p class="text-secondary text-center">{{ $comment->created_at }}</p>
                    </div>
                    <div class="col-md-10">
                        <p>
                            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>

                        </p>
                        <div class="clearfix"></div>
                        <p>{{ $comment->body }}</p>
                        <p>
                            <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endforeach
</article>



        {{--<div class="card card-inner">--}}
            {{--<div class="card-body">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-2">--}}
                        {{--<img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>--}}
                        {{--<p class="text-secondary text-center">15 Minutes Ago</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-10">--}}
                        {{--<p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>--}}
                        {{--<p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>--}}
                        {{--<p>--}}
                            {{--<a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>--}}
                            {{--<a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
