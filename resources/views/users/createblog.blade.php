<x-users.layouts.master>
    <x-slot:title>
        CreatBlog
        </x-slot>
        <main>

            <section class="section">
                <div class="container">


                    <h1 class=" text-center">Publish a new blog</h1>


                    <form class="mt-4" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" hidden name="user_id" value="{{Auth::user()->id}}">


                        <div class="form-group mt-4">
                            <label for="title">Title</label>
                            <textarea class="form-control" required name="title" id="title" rows="2" maxlength="80" placeholder="Write the title of your blog ..."></textarea>
                            @error('title')
                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mt-4" id="summernote">
                            <label for="des">Description</label>
                            <textarea class="form-control" required name="description" id="editor" rows="5" placeholder="Start writing your blog ...">{{ old('description') }}</textarea>
                            @error('description')
                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cover">Image</label>
                            <input type="file" required name="image" class="form-control" id="image" aria-describedby="emailHelp">
                            @error('image')
                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted">The ideal ratio of primary image is 16:9, The
                                image will be crop to fit if it is not maintain the exact ratio.</small>

                        </div>

                        <br>
                        <button type="submit" class="btn btn-success ml-3">Publish</button>
                        <button type="reset" class="btn btn-danger">Discard All</button>
                    </form>

                </div>
            </section>

        </main>



        <!-- Character counter -->
        <!-- <script src="https://unpkg.com/short-and-sweet/dist/short-and-sweet.min.js"></script> -->
        <script src="/user/js/short-and-sweet.min.js"></script>
        <script>
            shortAndSweet("textarea, input");
        </script>
        <!-- <script src="/user/js/editor/summernote.js"></script>
        <script src="/user/js/editor/summernote.min.js"></script>
        <script src="/user/js/editor/summernote-image-title.js"></script> -->

</x-users.layouts.master>