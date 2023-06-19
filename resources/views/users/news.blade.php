<x-users.layouts.master>
    <x-slot:title>
        News
        </x-slot>
        <div id="banner-area" class="banner-area " style="background-image:url({{ asset('/user/images/news/news1.jpg') }})">


        </div><!-- Banner area end -->
        <section id="main-container" class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 order-0 order-lg-0">
                        <div class="sidebar sidebar-left">
                            @if(isset(Auth::user()->role)?(Auth::user()->role == 'admin'||(Auth::user()->role == 'certified')):'')
                            <div class="card mb-3">
                                <form action="{{ route('news.store') }}" method="POST" onsubmit="return validateNewsForm()">
                                    @csrf
                                    <div class="form-group pt-2 ">
                                        <label for="news">
                                            <h2>Share News Link...</h2>
                                        </label>

                                        <div class="pr-3">

                                            <textarea name="url" required class="form-control " rows="1" id="url" placeholder="Enter your url"></textarea>

                                            @error('url')
                                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-success">Share</button>
                                    </div>

                                </form>
                            </div>
                            @endif

                            @php
                            $count = 0;
                            @endphp
                            <div class="widget recent-posts">
                                <h3 class="widget-title">Recent Posts</h3>
                                <ul class="list-unstyled">
                                    @foreach ($news as $recentnews)
                                    @php
                                    $count++;
                                    if($count <3){ continue; } @endphp <li class="d-flex align-items-center">
                                        <div class="posts-thumb">
                                            <a href="{{$recentnews->url}}"><img loading="lazy" alt="img" src="{{$recentnews->image_url}}" onerror="this.onerror=null;this.src='/user/images/news/news1.jpg';" /></a>
                                        </div>

                                        <h5 class="entry-title">
                                            <a href="{{$recentnews->url}}">{{$recentnews->title}}</a>
                                        </h5>

                                        </li>
                                        @endforeach

                                </ul>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <nav class="mt-4">

                                                <nav class="mb-md-50">


                                                    <ul class="pagination justify-content-center">
                                                        {{$news-> links()}}
                                                    </ul>
                                                </nav>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent post end -->



                        </div>
                        <!-- Sidebar end -->
                    </div>
                    <!-- Sidebar Col end -->

                    <div class="col-lg-7 mb-3 mb-lg-1 order-1 order-lg-1">

                        @foreach ($lastNews as $item)
                        <div class="post">
                            <div class="post-media post-image img-9-16">
                                <a href="{{$item->url}}">
                                    <img loading="lazy" src="{{$item->image_url}}" onerror="this.onerror=null;this.src='/user/images/news/news1.jpg';" class=" w-100" alt=" post-image" />
                                </a>
                            </div>

                            <div class="post-body">
                                <div class="entry-header">
                                    <div class="post-meta">
                                        <!-- print user role form user table using user_id -->

                                        <span class="post-author text-capitalize">
                                            <i class="far fa-user"></i>{{$item->user->role}}
                                        </span>
                                        <span class="post-cat">
                                            <i class="far fa-folder-open"></i> News
                                        </span>
                                        <span><i class="fas fa-calendar-alt pr-2"></i>{{ date('M j, Y', strtotime($item->created_at)) }}</span>

                                    </div>
                                    <h2 class="entry-title">
                                        <a href="{{$item->url}}">{{$item->title}}</a>
                                    </h2>
                                </div>
                                <!-- header end -->
                            </div>
                            <!-- post-body end -->
                        </div>
                        <!-- 1st post end -->

                        @endforeach

                    </div>
                    <!-- Content Col end -->
                </div>
                <!-- Main row end -->
            </div>
            <!-- Container end -->
        </section>
        <!-- Main container end -->



        </div>
</x-users.layouts.master>