<x-users.layouts.master>



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
                                <img loading="lazy" decoding="async" src="/storage/images/blog_images/{{$blog->image}}" alt="Post Thumbnail" class="w-100">

                            </div>
                            <p class="post-meta mb-2 mt-4">
                                <span><i class="fas fa-calendar-alt"></i>{{ date('M j, Y', strtotime($blog->created_at))}}</span>
                            </p>
                            <h3 class="d-inline text-uppercase">
                                {{$user->name}}
                                @if($user->role=='admin')
                                <span class="text-success ml-2"><i class="fas fa-user-shield"></i></span>
                                @elseif($user->role=='user')
                                <span class="text-primary ml-2"><i class="fas fa-user"></i></span>
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




                        <div class="mt-4">
                            <a href="{{route('blog.update',$blog->id)}}" class="btn btn-sm btn-outline-warning">Re-write Blog</a>
                            <a href="#" class="btn btn-sm btn-outline-danger">Remove Article</a>

                        </div>


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
                                <img loading="lazy" src="/storage/images/blog_images/{{$allblog->image }}" alt="service-icon" width="90" height="60" />
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


</x-users.layouts.master>