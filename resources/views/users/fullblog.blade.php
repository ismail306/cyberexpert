<x-users.layouts.master>



    <main>
        <section class="section">
            <div class="container">


                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <article>

                            <div class="card-image">

                                <!-- Modal -->
                                <div class="modal fade" id="primary-image-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">Change Primary Image</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="#" method="POST" enctype="multipart/form-data">
                                                @method('PATCH')
                                                @csrf

                                                <div class="modal-body">
                                                    <input type="text" name="id" hidden value="#">
                                                    <div class="form-group">
                                                        <label for="cover">Primary Image</label>
                                                        <input type="file" name="primary_image" class="form-control" id="cover" aria-describedby="emailHelp">
                                                        @error('primary_image')
                                                        <small id="emailHelp" class="form-text text-danger"></small>
                                                        @enderror
                                                        <small id="emailHelp" class="form-text text-muted">The ideal
                                                            ratio of primary image is 16:9, The
                                                            image will be crop to fit if it is not maintain the exact
                                                            ratio.</small>

                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>


                                <div class="post-info">
                                    <span class="text-uppercase">3 minutes to read</span>
                                    <a href="#" data-toggle="modal" data-target="#primary-image-update"><span class="text-uppercase">Change Image</span></a>
                                </div>

                                <div class="post-info">
                                    <span class="text-uppercase">3 minutes to read</span>
                                </div>


                                <img loading="lazy" decoding="async" src="/storage/images/blog_images/{{$blog->image}}" alt="Post Thumbnail" class="w-100">

                            </div>

                            <ul class="post-meta mb-2 mt-4">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:5px;margin-top:-4px" class="text-dark" viewBox="0 0 16 16">
                                        <path d="M5.5 10.5A.5.5 0 0 1 6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z" />
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                                    </svg> <span>12-33-2022</span>
                                </li>

                                <li class="float-right m-4 d-flex">

                                    <a id="like" style="background-color: white;"><i class="fa-solid fa-2x fa-heart text-danger m-1"></i></a>

                                    <a id="like" style="background-color: white;"><i class="fa-regular fa-2x fa-heart text-danger m-1"></i></a>






                                    <a onclick="myFunction()" style="background-color: white;"><i class="fa-regular fa-2x fa-heart text-secondary m-1 mr-2"></i></a>
                                    <script>
                                        function myFunction() {
                                            alert("You have to sign in to react to this article.");
                                        }
                                    </script>



                                    <h2 class="ml-1" id="total_like">3</h2>
                                </li>



                                <input type="text" name="user_id" id="user_id" value="" hidden>
                                <input type="text" name="blog_id" id="blog_id" value="" hidden>


                                <script>
                                    document.getElementById('like').addEventListener('click', click_event)

                                    function click_event() {



                                        if (document.getElementById('like').innerHTML ==
                                            '<i class="fa-regular fa-2x fa-heart text-danger m-1"></i>') {
                                            // if like

                                            document.getElementById('like').innerHTML =
                                                '<i class="fa-solid fa-2x fa-heart text-danger m-1"></i>'



                                            let user_id = document.getElementById('user_id').value;
                                            let blog_id = document.getElementById('blog_id').value;

                                            $.ajax({

                                                type: "post",
                                                url: "/like",
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
                                                '<i class="fa-regular fa-2x fa-heart text-danger m-1"></i>'

                                            let user_id = document.getElementById('user_id').value;
                                            let blog_id = document.getElementById('blog_id').value;

                                            $.ajax({

                                                type: "post",
                                                url: "/dislike",
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

                            </ul>

                            <br>

                            <h3 class="d-inline">


                                <img class="mr-2" style="max-width:20%;" src="#" alt="Owner primary image">

                                <img class="mr-2" style="max-width:20%;" src="" alt="Owner primary image">


                                ismail

                                <span class="text-success"><i class="fa-solid fa-circle-check"></i></span>

                                <span class="text-danger"><i class="fa-solid fa-chess-king"></i></span>

                            </h3>
                            <h1 class="my-3">title</h1>

                            <ul class="post-meta mb-4">

                                <li> <a href="#">xss</a>
                                </li>

                            </ul>
                            <div class="content text-left">
                                <hr>
                                <h2 id="heading">Introduction</h2>
                                <p>intro</p>


                                <h2 id="emphasis">Description</h2>
                                e45te4tyrtyr5yfgyfgyrtfghrd

                                <hr>


                                <h2 id="image">Image</h2>

                                <div class="card-image">

                                    <!-- Modal -->
                                    <div class="modal fade" id="delete-secondary-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="#" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="text" name="id" hidden value="#">
                                                    <div class="modal-body">
                                                        <h4 class="text-danger">Are you sure that you want to remove
                                                            this
                                                            image?</h4>
                                                        <p>You can always add a new secondary image from the re-write
                                                            article option.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No!</button>
                                                        <button type="submit" class="btn btn-danger">Yes, I'm
                                                            sure</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-info">
                                        <a href="#" data-toggle="modal" data-target="#delete-secondary-image"><span class="text-uppercase">Remove Image</span></a>
                                    </div>

                                    <img loading="lazy" decoding="async" class="w-100 d-block mb-4" src="" alt="THIS IS AN IMAGE">
                                </div>

                                <hr>



                                <h2 id="youtube-video">Youtube video</h2>
                                <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                                    <iframe src="" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;" allowfullscreen title="YouTube Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                            </div>
                        </article>




                        <div class="modal fade" id="blogDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title text-danger" id="exampleModalLongTitle">Remove Article!
                                        </h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="#" method="POST" class="mt-4">
                                        @csrf
                                        <div class="modal-body">

                                            <h4>Are you sure that you want to remove this article?</h4>
                                            <p class="text-danger">This article will be deleted parmanently!</p>

                                            <input type="text" hidden name="id" value="#">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No!</button>
                                            <button type="Submit" class="btn btn-danger">Yes! I'm Sure</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="#" class="btn btn-sm btn-outline-warning">Re-write Article</a>
                            <a href="#" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#blogDelete">Remove
                                Article</a>

                        </div>

                    </div>

                </div>
            </div>
        </section>
    </main>


</x-users.layouts.master>