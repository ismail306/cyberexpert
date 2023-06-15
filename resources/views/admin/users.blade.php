<x-admin.layouts.master>
    <x-slot name="title">
        {{ $title ?? 'Dashboard | users'}}
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
                                    <li class="breadcrumb-item active">Users</li>
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
                                    <h3>All Users</h3>
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
                                                    <th scope="col">PK</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($users as $user)
                                                <div class="modal fade" id="role{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form action="{{route('super.change_role')}}" method="post">
                                                            @method('PATCH')
                                                            @csrf
                                                            <input type="text" name="id" hidden value="{{$user->id}}">
                                                            <div class="modal-content">
                                                                <div class="modal-header">

                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                        Change Users Role</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Name: {{$user->name}} </p>
                                                                    <p>Email: {{$user->email}}</p>

                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlSelect1">Select
                                                                            Role:</label>
                                                                        <select class="form-control" id="exampleFormControlSelect1" name="role">
                                                                            <option value="user">Normal User</option>
                                                                            <option value="admin">admin</option>
                                                                            <option value="certified">Certified User</option>
                                                                            <option value="banned">Banned User</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form action="{{route('super.user_delete', $user->id)}}" method="GET">
                                                            @method('DELETE')
                                                            @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                        Delete User</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Name: {{$user->name}} </p>
                                                                    <p>Email: {{$user->email}}</p>
                                                                    <p class="text-danger">Deleteing this user?</p>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-danger">Delete
                                                                        User</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <tr>
                                                    <th scope="row">{{$user->id}}</th>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>

                                                        @if($user->role == "user")

                                                        <span class="badge badge-secondary">User</span>
                                                        @elseif($user->role == "admin")
                                                        <span class="badge badge-danger">Admin</span>
                                                        @elseif($user->role == "certified")
                                                        <span class="badge badge-success">Certified</span>
                                                        @elseif($user->role == "banned")
                                                        <span class="badge badge-warning">Banned</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#role{{$user->id}}">Change Role</a>
                                                        <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#{{$user->id}}">Delete</a>
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