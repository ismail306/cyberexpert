<x-admin.layouts.master>
    <x-slot name="title">
        {{ $title ?? 'Dashboard | News'}}
    </x-slot>



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">

                    <!-- /# column -->
                    <div class="col-lg-12 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">News</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title text-center">
                                    <h3>All News</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="jsgrid-table-panel">
                                    <div id="jsGrid">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($news as $news)

                                                <div class="modal fade" id="{{$news->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form action="{{route('super.news_delete', $news->id)}}" method="GET">
                                                            @method('DELETE')
                                                            @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                        Delete News</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <p class="text-danger">Do you want to delete this News?</p>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-danger">Delete
                                                                        News</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <tr>
                                                    <th>{{ $loop->iteration }}</th>

                                                    <td>{{ str_limit($news->title, 100) }}</td>

                                                    <td>

                                                        <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#{{$news->id}}">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">

                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>


                    <!-- Footer will be here -->



                </section>
            </div>
        </div>
    </div>


</x-admin.layouts.master>