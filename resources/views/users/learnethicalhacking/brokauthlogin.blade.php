<x-users.layouts.master>
    <x-slot:title>
        Broken|Authentication
        </x-slot>
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-16 col-sm-12" style="margin-top: 60px;">
                    <div class="card p-5">
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        <form action="{{route('brokauthlogin')}}" method="post">
                            @csrf

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form2Example1" name="username" class="form-control" />
                                <label class="form-label" for="form2Example1">Username</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="form2Example2" class="form-control" />
                                <label class="form-label" for="form2Example2">Password</label>
                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>


                        </form>
                    </div>

                </div>
            </div>


        </div>

</x-users.layouts.master>