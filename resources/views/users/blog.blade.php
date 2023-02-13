<x-users.layouts.master>
    <x-slot:title>
        CyberExpert | Blog
        </x-slot>

        <main>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            <section class="section">
                <div class="container">

                    <div class="row no-gutters-lg">
                        <div class="col-8">
                            <h2 class="section-title">Latest Blog</h2>
                        </div>
                        @if($lastBlog != null)
                        <div class="col-lg-8 mb-5 mb-lg-0">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <article class="card article-card">
                                        <a href="article.html">
                                            <div class="card-image p-2">

                                                <img loading="lazy" decoding="async" src="/storage/images/blog_images/{{$lastBlog->image }}" alt="Latest Blog" class="w-100">
                                            </div>
                                        </a>
                                        <p class=" mb-0 mt-1 ml-4">
                                            <span><i class="fas fa-calendar-alt pr-2"></i>{{ date('M j, Y', strtotime($lastBlog->created_at)) }}</span>
                                        </p>
                                        <div class="card-body px-0 pb-1">

                                            <h3 class="mx-4 post-title">{{$lastBlog->title}}</h3>
                                            <div>
                                                @php
                                                // Limit the description to 30 words
                                                $limitedDescription = str_limit($lastBlog->description, 300);
                                                @endphp

                                                <div class="description mx-4 mb-4">
                                                    {{ $limitedDescription }}
                                                    @if (strlen($lastBlog->description) > 300)
                                                    <a href="{{route('blog.readfull', $lastBlog->id)}}" class="see-more text-info">Read Full Blog</a>
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

                                        <h3 class="ml-2 mt-4 pt-1 text-primary">Recommended</h3>
                                        <?php $count = 0; ?> @foreach($blogs as $blog) @php $count++; if ($count> 5) {
                                        break;
                                        }

                                        @endphp
                                        <h5 class=" ml-2 mb-4 ">
                                            <a href="{{route('blog.readfull', $blog->id)}}" class="blog-title ">{{$blog->title}}</a>

                                        </h5>
                                        @endforeach

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
                                            <div class="card-image p-1">
                                                <img loading="lazy" decoding="async" src="/storage/images/blog_images/{{$blog->image }}" alt="Post Thumbnail" class="w-100">
                                            </div>
                                        </a>
                                        <p class="ml-4 mb-0 mt-1">
                                            <span><i class="fas fa-calendar-alt pr-2"></i>{{ date('M j, Y', strtotime($lastBlog->created_at)) }}</span>
                                        </p>
                                        <div class="card-body px-0 pb-0">
                                            <h4 class="px-4 post-title">{{$blog->title}}</h4>
                                            <div>
                                                @php
                                                // Limit the description to 30 words
                                                $limitedDescription = str_limit($blog->description, 200);
                                                @endphp

                                                <div class="description px-4">
                                                    {{ $limitedDescription }}
                                                    @if (strlen($blog->description) > 200)
                                                    <a href="{{route('blog.readfull',$blog->id)}}" class="see-more text-info">Read Full Blog</a>
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

        <!-- <script>
        function toggleDescription() {
            // Get the full description element
            var fullDescriptionElement = document.querySelector('.full-description');
            // Toggle the display of the full description
            fullDescriptionElement.style.display = fullDescriptionElement.style.display === 'none' ? 'block' : 'none';
        }
    </script> -->


</x-users.layouts.master>