<x-users.layouts.master>
    <x-slot:title>
        Specialist
        </x-slot>

        <div class="container">
            <div class="row sp_list">
                <div class="col-lg-12">
                    <h1>Security Specialist List</h1>


                </div>
            </div>



            <div class="row">
                @foreach($specialists as $specialist)
                <div class="col-md-4">
                    <div class="card user-card">
                        <div class="card-header">
                            <h5>Profile</h5>
                        </div>
                        <div class="card-block">
                            <div class="user-image">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius" alt="User-Profile-Image">
                            </div>
                            <h6 class="f-w-600 m-t-5 m-b-5">{{$specialist->user->name}}</h6>
                            <p>{{$specialist->about}}</p>

                            <hr>
                            <!-- <p class="m-t-5">Activity Level: 87%</p>
                            <ul class="list-unstyled activity-leval">
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                                <li></li>
                            </ul> -->
                            <div class="bg-c-blue counter-block m-t-10 p-20">
                                <div class="row">

                                    <div class="col-8 ">
                                        <i class="fa fa-phone"> {{$specialist->user->phone}}</i>

                                    </div>
                                    <div class="col-4">
                                        <a href="" data-toggle="modal" data-target="#contact"><i class="fa fa-paper-plane"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
</x-users.layouts.master>