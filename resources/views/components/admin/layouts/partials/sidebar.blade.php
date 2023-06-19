<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="#">
                        <span>Cyberexpert Admin</span>
                    </a></div>


                <li class="label">Options</li>

                <li><a href="{{route('admin.users')}}"><i class="fa fa-users"></i> Users</a></li>
                <!-- blog-->
                <li><a href="{{route('admin.blogs')}}"> <i class="fa fa-file"></i> Blog</a></li>
                <li><a href="{{route('admin.questions')}}"><i class="fa fa-solid fa-question"></i> Question</a></li>
                <!-- reply -->
                <li><a href="{{route('admin.answers')}}"><i class="fa fa-solid fa-reply"></i> Reply</a></li>
                <!-- User Request -->
                <li><a href="{{route('certificate.request')}}"><i class="fas fa-solid fa-certificate"></i> User Request</a></li>
                <!-- News -->
                <li><a href="#"><i class="fas fa-solid fa-newspaper"></i> News</a></li>

                <li>
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class=" custom-li py-3 text-lite dropdown-item"> <i class="ti-close"></i>Logout</button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>