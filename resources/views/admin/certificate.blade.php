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
                                    <h3>Requested Users for Certified</h3>
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
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Certificate</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($certificates as $certificate)
                                                <div class="modal fade" id="approved{{$certificate->user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form action="{{route('certificate.review')}}" method="post">
                                                            @method('GET')
                                                            @csrf
                                                            <input type="text" name="id" hidden value="{{$certificate->user->id}}">
                                                            <div class="modal-content">
                                                                <div class="modal-header">

                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                        Approved User request </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Name: {{$certificate->user->name}} </p>
                                                                    <p>Email: {{$certificate->user->email}}</p>

                                                                    <div class="form-group text-success">
                                                                        <label for="exampleFormControlSelect1">Change
                                                                            Role To: certified User </label>
                                                                        <input hidden type="text" name="status" value="approved">

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



                                                <div class="modal fade" id="rejected{{$certificate->user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form action="{{route('certificate.review')}}" method="post">
                                                            @method('GET')
                                                            @csrf


                                                            <div class="modal-content">
                                                                <div class="modal-header">

                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                        Approved User request </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Name: {{$certificate->user->name}} </p>
                                                                    <p>Email: {{$certificate->user->email}}</p>

                                                                    <div class="form-group text-danger">

                                                                        <input hidden type="text" name="id" value="{{$certificate->user->id}}">
                                                                        <input hidden type="text" name="status" value="rejected">


                                                                        <div>
                                                                            <label for="exampleFormControlSelect1">Reason for Reject Request : </label>
                                                                            <br>
                                                                            <textarea type="text" id="message" name="message" value="">
                                                                        </textarea>
                                                                        </div>
                                                                        @error('message')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror

                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" onclick="validateForm()" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>


                                                <tr>
                                                    <th>{{ $loop->iteration }}</th>
                                                    <td>{{$certificate->user->name}}</td>
                                                    <td>{{$certificate->user->email}}</td>
                                                    <td>
                                                        @if($certificate->status == "approved")
                                                        <span class="badge badge-success">Approved</span>
                                                        @elseif($certificate->status == "pending")

                                                        <span class="badge badge-secondary">Pending</span>

                                                        @elseif($certificate->status == "rejected")
                                                        <span class="badge badge-danger">Rejected</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ asset('storage/images/certificates/' . $certificate->url) }}" class="btn btn-primary">Download Certificate</a>
                                                    </td>

                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#approved{{$certificate->user->id}}">Approved</a>
                                                        <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#rejected{{$certificate->user->id}}">Reject</a>
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
    <script>
        function validateForm() {
            var message = document.getElementById("message").value;
            if (message.trim() === "") {
                alert("Please enter a message.");
                return false;
            }
        }
    </script>

</x-admin.layouts.master>