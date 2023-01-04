<x-users.layouts.master>


    <main>
        <section class="section">
            <div class="container">

                <div class="row no-gutters-lg">
                    <div class="col-8">
                        <h2 class="section-title">Latest Articles</h2>
                    </div>
                    @if($lastBlog != null)
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <article class="card article-card">
                                    <a href="article.html">
                                        <div class="card-image">
                                            <div class="post-info"> <span class="text-uppercase">{{$lastBlog->created_at->format('m/d/Y')}}</span>
                                            </div>


                                            <img loading="lazy" decoding="async" src="/storage/images/blog_images/{{$lastBlog->image }}" alt="Latest Blog" class="w-100">
                                        </div>
                                    </a>
                                    <div class="card-body px-0 pb-1">
                                        <button type="button" class="btn btn-success ml-4">{{$lastBlog->category}}</button>
                                        <h3 class="m-4"><a class="post-title" href="article.html">{{$lastBlog->title}}</a></h3>
                                        <div>
                                            @php
                                            // Limit the description to 30 words
                                            $limitedDescription = str_limit($lastBlog->description, 300);
                                            @endphp

                                            <div class="description m-4">
                                                {{ $limitedDescription }}
                                                @if (strlen($lastBlog->description) > 300)
                                                <a href="article.html" class="see-more text-info">See more</a>
                                                <div class="full-description" style="display: none;">
                                                    {{ $lastBlog->description }}
                                                </div>
                                                @endif
                                            </div>

                                        </div>

                                    </div>
                                </article>
                            </div>


                        </div>
                    </div>
                    @endif

                    <div class="col-lg-4">
                        <div class="widget-blocks">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="widget ">
                                        <a href="{{ route('blog.create')}}">
                                            <div class="widget-body col-lg-12 btn btn-sm cteate-blog-btn">
                                                <div class="row justify-content-center ">
                                                    <i class="fa fa-solid fa-2x fa-plus mr-2"></i>
                                                    <span class="m-1">Create a new Blog</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>



                                <div class="col-lg-12 col-md-6">
                                    <div class="widget">
                                        <h2 class="section-title mb-3">Categories</h2>
                                        <div class="widget-body">
                                            <ul class="widget-list">
                                                <li><a href="#!">computer<span class="ml-auto">(3)</span></a>
                                                </li>
                                                <li><a href="#!">cruises<span class="ml-auto">(2)</span></a>
                                                </li>
                                                <li><a href="#!">destination<span class="ml-auto">(1)</span></a>
                                                </li>
                                                <li><a href="#!">internet<span class="ml-auto">(4)</span></a>
                                                </li>
                                                <li><a href="#!">lifestyle<span class="ml-auto">(2)</span></a>
                                                </li>
                                                <li><a href="#!">news<span class="ml-auto">(5)</span></a>
                                                </li>
                                                <li><a href="#!">telephone<span class="ml-auto">(1)</span></a>
                                                </li>
                                                <li><a href="#!">tips<span class="ml-auto">(1)</span></a>
                                                </li>
                                                <li><a href="#!">travel<span class="ml-auto">(3)</span></a>
                                                </li>
                                                <li><a href="#!">website<span class="ml-auto">(4)</span></a>
                                                </li>
                                                <li><a href="#!">hugo<span class="ml-auto">(2)</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>









                <div class="row no-gutters-lg">

                    <div class="col-lg-12 mb-8 mb-lg-0">
                        <div class="row">

                            @foreach($blogs as $blog)



                            <div class="col-md-4 mb-4">
                                <article class="card article-card article-card-sm h-100">
                                    <a href="article.html">
                                        <div class="card-image">
                                            <div class="post-info"> <span class="text-uppercase">{{$blog->created_at->format('m/d/Y')}}</span>
                                            </div>
                                            <img loading="lazy" decoding="async" src="/storage/images/blog_images/{{$blog->image }}" alt="Post Thumbnail" class="w-100">
                                        </div>
                                    </a>
                                    <div class="card-body px-0 pb-0">
                                        <button type="button" class="btn btn-success ml-4">{{$blog->category}}</button>

                                        <h4 class="px-4"><a class="post-title" href="article.html">{{$blog->title}}</a></h4>
                                        <div>
                                            @php
                                            // Limit the description to 30 words
                                            $limitedDescription = str_limit($blog->description, 200);
                                            @endphp

                                            <div class="description px-4">
                                                {{ $limitedDescription }}
                                                @if (strlen($blog->description) > 200)
                                                <a href="article.html" class="see-more text-info">See more</a>
                                                <div class="full-description" style="display: none;">
                                                    {{ $blog->description }}
                                                </div>
                                                @endif
                                            </div>

                                        </div>

                                    </div>
                                </article>
                            </div>

                            @endforeach







                        </div>
                    </div>

                </div>

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
        </section>
    </main>

    <script>
        function toggleDescription() {
            // Get the full description element
            var fullDescriptionElement = document.querySelector('.full-description');
            // Toggle the display of the full description
            fullDescriptionElement.style.display = fullDescriptionElement.style.display === 'none' ? 'block' : 'none';
        }
    </script>


</x-users.layouts.master>