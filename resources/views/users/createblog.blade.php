<x-users.layouts.master>
    <main>

        <section class="section">
            <div class="container">


                <h1>Publish a new blog,</h1>
                <hr>

                <form class="mt-4" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" hidden name="user_id" value="{{Auth::user()->id}}">


                    <div class="form-group mt-4">
                        <label for="title">Title</label>
                        <textarea class="form-control" name="title" id="title" rows="2" maxlength="80" placeholder="Write the title of your blog ...">{{ old('title') }}</textarea>
                        @error('title')
                        <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label for="des">Description</label>
                        <textarea class="form-control" name="description" id="editor" rows="5" placeholder="Start writing your blog ...">{{ old('description') }}</textarea>
                        @error('description')
                        <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <br>

                    <h1>Improve your blog quality,</h1>
                    <hr>



                    <div class="form-group">
                        <label for="cover">Image</label>
                        <input type="file" name="image" class="form-control" id="image" aria-describedby="emailHelp">
                        @error('image')
                        <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                        <small id="emailHelp" class="form-text text-muted">The ideal ratio of primary image is 16:9, The
                            image will be crop to fit if it is not maintain the exact ratio.</small>

                    </div>





                    <br>
                    <button type="submit" class="btn btn-secondary btn-design">Publish</button>
                    <button type="reset" class="btn btn-secondary btn-design">Discard All</button>
                </form>

            </div>
        </section>

    </main>



    <script>
        ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
            console.error(error);
        });
    </script>


    <!-- Character counter -->
    <script src="https://unpkg.com/short-and-sweet/dist/short-and-sweet.min.js"></script>
    <script>
        shortAndSweet("textarea, input");
    </script>

</x-users.layouts.master>