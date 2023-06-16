<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-right">
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <span class="user-avatar">{{ auth()->user()->name }} <i class="ti-angle-down f-s-10"></i></span>
                        </div>
                        <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li><a href="{{ route('user.profile') }}"><i class="fa fa-user"></i> Profile</a></li>
                                    <li>
                                        <form action="{{route('logout')}}" method="Post">
                                            @csrf
                                            <button type="submit" class="dropdown-item customlogout"> <i class=" fas fa-sharp fa-light fa-power-off mr-1"></i> Logout</button>

                                        </form>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>