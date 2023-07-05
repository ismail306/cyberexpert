<x-users.layouts.master>
    <x-slot:title>
        FullBlog | CyberExpert
        </x-slot>


        <main>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            <section class="section">
                <div class="container">


                    <div class="row">
                        <div class="col-lg-8 mb-5 mb-lg-0 mt-6">
                            <article>

                                <div class="card-image">
                                    <img loading="lazy" decoding="async" src="{{asset('storage/images/blog_images/'.$blog->image)}}" alt="Post Thumbnail" class="w-100">

                                </div>
                                <div class=" post-meta mb-2 mt-3">
                                    <div>
                                        <p>
                                            <span><i class="fas fa-calendar-alt"></i>{{ date('M j, Y', strtotime($blog->created_at))}}</span>
                                        </p>
                                    </div>



                                    <div class="float-right  d-flex">
                                        @if(Auth::user())
                                        @if(isset($i_reacted)?($i_reacted):'')
                                        <a id="like"><i class="fa fa-2x fa-star text-primary"></i></a>
                                        @else
                                        <a id="like"><i class="fa fa-2x fa-star text-muted"></i></a>

                                        @endif


                                        @else

                                        <a onclick="myFunction()"><i class="fa fa-regular fa-2x fa-star text-secondary m-1 mr-2"></i></a>
                                        <script>
                                            function myFunction() {
                                                alert("You have to sign in to react to this article.");
                                            }
                                        </script>

                                        @endif

                                        <h2 class="ml-2" id="total_like">{{isset($total_react)?($total_react):''}}</h2>

                                    </div>
                                    @if(Auth::user())

                                    <input type="text" name="user_id" id="user_id" value="{{ Auth::user()->id }} " hidden>
                                    <input type="text" name="blog_id" id="blog_id" value="{{ $blog->id }}" hidden>


                                    <script>
                                        document.getElementById('like').addEventListener('click', click_event)

                                        function click_event() {



                                            if (document.getElementById('like').innerHTML ==
                                                '<i class="fa fa-2x fa-star text-muted"></i>') {
                                                // if like

                                                document.getElementById('like').innerHTML =
                                                    '<i class="fa fa-2x fa-star text-primary"></i>'



                                                let user_id = document.getElementById('user_id').value;
                                                let blog_id = document.getElementById('blog_id').value;


                                                $.ajax({

                                                    method: "post",
                                                    url: "{{route('blog.like')}}",
                                                    data: {
                                                        user_id: user_id,
                                                        blog_id: blog_id,
                                                        _token: '{{ csrf_token() }}'

                                                    },
                                                    success: function(response) {
                                                        console.log(response);
                                                    },
                                                })

                                                document.getElementById('total_like').innerHTML = parseInt(
                                                    document.getElementById('total_like').innerHTML) + 1;

                                            } else {

                                                // if dislike

                                                document.getElementById('like').innerHTML =
                                                    '<i class="fa fa-2x fa-star text-muted"></i>'

                                                let user_id = document.getElementById('user_id').value;
                                                let blog_id = document.getElementById('blog_id').value;

                                                $.ajax({

                                                    method: "post",
                                                    url: "{{route('blog.dislike')}}",
                                                    data: {
                                                        user_id: user_id,
                                                        blog_id: blog_id,
                                                        _token: '{{ csrf_token() }}'

                                                    },
                                                    success: function(response) {
                                                        console.log(response);
                                                    },
                                                })


                                                document.getElementById('total_like').innerHTML = parseInt(
                                                    document.getElementById('total_like').innerHTML) - 1;
                                            }

                                        }
                                    </script>
                                    @endif
                                </div>


                                <h3 class="d-inline text-uppercase">
                                    {{$user->name}}
                                    @if($user->role=='certified')
                                    <span class="text-success ml-2"><i class="fas fa-user-shield"></i></span>
                                    @elseif($user->role=='user')
                                    <span class="text-primary ml-2"><i class="fas fa-user"></i></span>
                                    @elseif($user->role=='admin')
                                    <span class="text-warning ml-2"><i class="fas fa-user-circle"></i></span>
                                    @endif
                                </h3>
                                <h3 class="mt-4">{{$blog->title}}</h3>

                                <div class="content text-left">

                                    <p>
                                        {{$blog->description}}
                                    </p>
                                    <hr>

                                </div>
                            </article>


                            @if(isset(Auth::user()->id) && Auth::user()->id == $blog->user_id)

                            <div class="mt-4">
                                <a href="{{route('blog.update',$blog->id)}}" class="btn btn-sm btn-outline-warning">Re-write Blog</a>


                                <form action="{{ route('blog.delete', $blog->id)}}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm  btn-outline-danger ml-2">Delete Blog</button>
                                </form>

                            </div>
                            @endif

                        </div>


                        <div class="col-lg-4 mt-6 mt-lg-0 mb-4 mb-lg-0">

                            <div class="widget mb-4">
                                <a href="{{ route('blog.create')}}">
                                    <div class="widget-body col-lg-12 btn btn-sm cteate-blog-btn">
                                        <div class="row justify-content-center ">
                                            <i class="fa fa-solid fa-2x fa-plus mr-2"></i>
                                            <span class="m-1">Create a new Blog</span>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <?php $count = 0; ?>
                            @foreach ($blogs as $allblog)

                            <div class="ts-service-box d-flex mb-4">
                                <div class="ts-service-box-img p-1">
                                    <img loading="lazy" src="{{asset('storage/images/blog_images/'.$allblog->image) }}" alt="service-icon" width="90" height="60" />
                                </div>
                                <div>
                                    <h5 class="ml-2 mt-1">
                                        <a href="{{route('blog.readfull', $allblog->id)}}" class="blog-title ">{{$allblog->title}}</a>
                                    </h5>

                                </div>




                            </div>
                            @endforeach
                            <!-- Blog end -->

                            <!-- paginator -->
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <nav class="mt-4">

                                            <nav class="mb-md-50">


                                                <ul class="pagination justify-content-center">
                                                    {{$blogs-> links()}}
                                                </ul>
                                            </nav>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

</x-users.layouts.master>