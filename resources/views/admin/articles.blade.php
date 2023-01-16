<x-admin.master>
    <x-slot name="title">
        {{ $title ?? 'Users | Admin'}}
    </x-slot>

    <x-admin.partials.sidebar />

    <x-admin.partials.navbar />



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>All Articles</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Articles</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="jsgrid-table-panel">
                                    <div id="jsGrid">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">PK</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($articles as $blog)

                                                <div class="modal fade" id="{{$blog->id}}" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form action="{{route('super.blog_delete')}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                        Delete User</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Writer: {{$blog->owner}}</p>
                                                                    <p>Title: {{$blog->title}}</p>
                                                                    <p class="text-danger">Deleteing this article?</p>
                                                                    <input type="text" name="blog_id" hidden
                                                                        value="{{$blog->id}}">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-danger">Delete
                                                                        Article</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <tr>
                                                    <th scope="row">{{$blog->id}}</th>
                                                    <td>{{$blog->owner}}</td>
                                                    <td>{{$blog->title}}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal"
                                                            data-target="#{{$blog->id}}">Delete</a>
                                                    </td>
                                                </tr>

                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                {{ $articles->links() }}
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <x-admin.partials.footer />
                </div>
            </div>
        </div>
    </div>


</x-admin.master>