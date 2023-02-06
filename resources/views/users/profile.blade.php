<x-users.layouts.master>


    <div class="content-wrapper">
        <div class="content">

            <div class="bg-white border rounded">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-xl-3">
                        <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                            <div class="card text-center widget-profile px-0 border-0">
                                <div class="card-img mx-auto rounded-circle">
                                    <img src="/FrontEnd/img/user/u6.jpg" alt="user image">
                                </div>

                                <div class="card-body">
                                    <h4 class="py-2 text-dark">Albrecht Straub</h4>
                                    <p>Albrecht.straub@gmail.com</p>
                                    <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a>
                                </div>
                            </div>



                            <hr class="w-100">

                            <div class="contact-info pt-4">
                                <h5 class="text-dark mb-1">Contact Information</h5>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                                <p>Albrecht.straub@gmail.com</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                                <p>+99 9539 2641 31</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                                <p>Nov 15, 1990</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Social Profile</p>
                                <p class="pb-3 social-button">
                                    <a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>

                                    <a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>

                                    <a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>

                                    <a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
                                        <i class="mdi mdi-skype"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-9">
                        <div class="profile-content-right profile-right-spacing py-5">
                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Be A Specialist</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Update Profile</a>
                                </li>
                            </ul>

                            <div class="tab-content px-3 px-xl-5" id="myTabContent">

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="tab-widget mt-5">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="media widget-media p-4 bg-white border">
                                                    <div class="icon rounded-circle mr-4 bg-primary">
                                                        <i class="mdi mdi-account-outline text-white "></i>
                                                    </div>

                                                    <div class="media-body align-self-center">
                                                        <h4 class="text-primary mb-2">5300</h4>
                                                        <p>New Users</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="media widget-media p-4 bg-white border">
                                                    <div class="icon rounded-circle bg-warning mr-4">
                                                        <i class="mdi mdi-cart-outline text-white "></i>
                                                    </div>

                                                    <div class="media-body align-self-center">
                                                        <h4 class="text-primary mb-2">1953</h4>
                                                        <p>Order Placed</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="media widget-media p-4 bg-white border">
                                                    <div class="icon rounded-circle mr-4 bg-danger">
                                                        <i class="mdi mdi-cart-outline text-white "></i>
                                                    </div>

                                                    <div class="media-body align-self-center">
                                                        <h4 class="text-primary mb-2">1450</h4>
                                                        <p>Total Sales</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                    <div class="tab-pane-content mt-5">
                                        <form>
                                            <div class="form-group row mb-6">
                                                <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
                                                    Image</label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="custom-file mb-1">
                                                        <input type="file" class="custom-file-input" id="coverImage" required>
                                                        <label class="custom-file-label" for="coverImage">Choose
                                                            file...</label>
                                                        <div class="invalid-feedback">Example invalid custom file
                                                            feedback</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="firstName">First name</label>
                                                        <input type="text" class="form-control" id="firstName" value="Albrecht">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lastName">Last name</label>
                                                        <input type="text" class="form-control" id="lastName" value="Straub">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="userName">User name</label>
                                                <input type="text" class="form-control" id="userName" value="Straub">
                                                <span class="d-block mt-1">Accusamus nobis at omnis consequuntur culpa
                                                    tempore saepe animi.</span>
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" value="albrecht.straub@gmail.com">
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="oldPassword">Old password</label>
                                                <input type="password" class="form-control" id="oldPassword">
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="newPassword">New password</label>
                                                <input type="password" class="form-control" id="newPassword">
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="conPassword">Confirm password</label>
                                                <input type="password" class="form-control" id="conPassword">
                                            </div>

                                            <div class="d-flex justify-content-end mt-5">
                                                <button type="submit" class="btn btn-design btn-primary mb-2 btn-pill">Update
                                                    Profile</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-users.layouts.master>