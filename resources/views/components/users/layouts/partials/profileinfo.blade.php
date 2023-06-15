<div class="col-lg-5 col-xl-4">
    <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
        <div class="card text-center widget-profile px-0 border-0">
            <div class="card-img mx-auto">
                @if(isset($users->profile_pic))
                <img src="{{asset('/storage/images/profile_pics/' . $users->profile_pic)}}" class="rounded-circle" alt="user image" width="100px">
                @else
                <img src="{{asset('/user/images/users/profile.jpg')}}" class="rounded-circle" alt="user image" width="100px">
                @endif
            </div>

            <div class=" card-body">
                <h4 class="py-2 text-dark">{{isset($users->name)?$users->name:""}}
                    @if(isset($users))
                    @if($users->role=='certified')
                    <span class="text-success ml-2"><i class="fas fa-user-shield"></i></span>
                    @elseif($users->role=='user')
                    <span class="text-primary ml-2"><i class="fas fa-user"></i></span>
                    @elseif($users->role=='admin')
                    <span class="text-warning ml-2"><i class="fas fa-user-circle"></i></span>
                    @endif
                    @endif
                </h4>
                <div class=" px-3">
                    <p>{{isset($users->about)?$users->about:""}}</p>
                </div>

            </div>
        </div>


        <div class="contact-info pt-2">
            <h4 class="text-dark mb-1">Contact Information</h4>
            <div class="">
                <span><i class="fa fa-envelope pr-2"></i>{{isset($users->email)?$users->email:""}} </span>
            </div>

            <div>
                <span><i class="fa fa-phone pr-2"> </i>{{isset($users->phone)?$users->phone:""}} </span>

            </div>
        </div>

        <div class="card mt-4 px-2 pt-3 text-center border border-primary">
            <h3><a href="{{route('specialist.applications')}}">Apply to become a certified specialist</a></h3>
        </div>

        <div class="card">
            @if(isset($blogs))
            <h3 class="ml-2 mt-4 pt-1 text-center">My Blogs</h3>

            @foreach($blogs as $blog)
            <h5 class=" ml-2 mb-4 ">
                <a href="{{route('blog.readfull', $blog->id)}}" class="blog-title ">
                    {{$blog->title}}</a>

            </h5>
            @endforeach
            @endif

        </div>
    </div>
</div>