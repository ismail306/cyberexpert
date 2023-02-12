<x-users.layouts.master>
    <x-slot:title>
        News
        </x-slot>
        <div id="banner-area" class="banner-area" style="background-image:url(/user/images/news/news1.jpg)">

        </div><!-- Banner area end -->
        <section id="main-container" class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 order-1 order-lg-0">
                        <div class="sidebar sidebar-left">

                            <div class="card mb-3">
                                <form action="{{ route('news.store') }}" method="POST" onsubmit="return validateNewsForm()">
                                    @csrf
                                    <div class="form-group pt-2 ">
                                        <label for="news">
                                            <h2>Share News Link...</h2>
                                        </label>

                                        <div>

                                            <textarea name="url" required class="form-question" rows="2" id="url" placeholder="Enter your url"></textarea>

                                            @error('url')
                                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-success">Post</button>
                                    </div>

                                </form>
                            </div>


                            <div class="widget recent-posts">
                                <h3 class="widget-title">Recent Posts</h3>
                                <ul class="list-unstyled">
                                    @foreach ($news as $recentnews)
                                    <li class="d-flex align-items-center">
                                        <div class="posts-thumb">
                                            <a href="#"><img loading="lazy" alt="img" src="{{$recentnews->image_url}}" /></a>
                                        </div>

                                        <h4 class="entry-title">
                                            <a href="#">{{$recentnews->title}}</a>
                                        </h4>

                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <!-- Recent post end -->



                        </div>
                        <!-- Sidebar end -->
                    </div>
                    <!-- Sidebar Col end -->

                    <div class="col-lg-7 mb-3 mb-lg-0 order-0 order-lg-1">

                        @foreach ($lastNews as $item)
                        <div class="post">
                            <div class="post-media post-image img-9-16">
                                <img loading="lazy" src="{{$item->image_url}}" class=" w-100" alt=" post-image" />
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
                                        <a href="news-single.html">{{$item->title}}</a>
                                    </h2>
                                </div>
                                <!-- header end -->
                            </div>
                            <!-- post-body end -->
                        </div>
                        <!-- 1st post end -->

                        @endforeach
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
                    <!-- Content Col end -->
                </div>
                <!-- Main row end -->
            </div>
            <!-- Container end -->
        </section>
        <!-- Main container end -->



        </div>
</x-users.layouts.master>