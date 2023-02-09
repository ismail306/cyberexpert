<x-users.layouts.master>
    <x-slot:title>
        Update Blog
        </x-slot>
        <main>

            <section class="section">
                <div class="container">


                    <h1 class=" text-center">Update Your blog</h1>

                    <form class="mt-4" action="{{ route('blog.updating') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="text" hidden name="user_id" value="{{isset(Auth::user()->id)?(Auth::user()->id) :''}}">

                        <input type="text" hidden name="id" value="{{$blog->id}}">

                        <div class="form-group mt-4">
                            <label for="title">Title</label>
                            <textarea class="form-control" name="title" id="title" rows="2" maxlength="110" placeholder="Write the title of your blog ...">{{$blog->title}}</textarea>
                            @error('title')
                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                            <label for="des">Description</label>
                            <textarea class="form-control" name="description" id="editor" rows="10" placeholder="Start writing your blog ...">{{$blog->description}}</textarea>
                            @error('description')
                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success ml-3">Publish</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
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