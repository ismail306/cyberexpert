<x-users.layouts.master>


    <div class="content-wrapper">
        <div class="content">

            <div class="bg-white border rounded">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-xl-3">
                        <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                            <div class="card text-center widget-profile px-0 border-0">
                                <div class="card-img mx-auto rounded-circle">
                                    <img src="/user/images/users/profile.jpg" alt="user image" width="100px>
                                </div>

                                <div class=" card-body">
                                    <h4 class="py-2 text-dark">Albrecht Straub
                                        <span class="text-success ml-2"><i class="fas fa-user-shield"></i></span>
                                    </h4>
                                </div>
                            </div>

                            <div class="contact-info pt-2">
                                <h4 class="text-dark mb-1">Contact Information</h4>
                                <div class="">
                                    <span><i class="fa fa-envelope pr-2"></i>ismail.63K@gmail.com </span>
                                </div>

                                <div>
                                    <span><i class="fa fa-phone pr-2"> </i>01929074663</span>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-9">
                        <div class="profile-content-right profile-right-spacing py-5">
                            <h2 class="text-center">Update Profile</h2>

                            <div class="tab-content px-3 px-xl-5" id="myTabContent">


                                <section>

                                    <header class="ml-3">
                                        <h3 class="text-lg font-medium text-gray-900">
                                            {{ __('Profile Information') }}
                                        </h3>

                                        <p class="mt-1 text-sm text-gray-600">
                                            {{ __("Update your account's profile information and email address.") }}
                                        </p>
                                    </header>
                                    <form>
                                        <div class="form-group mb-4">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" value="">

                                        </div>


                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" value="">
                                        </div>



                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-success mb-2 btn-pill">Update
                                                Profile</button>
                                        </div>
                                    </form>

                                </section>

                                <section>
                                    <header class="ml-3">
                                        <h3 class="text-lg font-medium text-gray-900">
                                            {{ __('Update Password') }}
                                        </h3>

                                        <p class="mt-1 text-sm text-gray-600">
                                            {{ __('Ensure your account is using a long, random password to stay secure.') }}
                                        </p>
                                    </header>


                                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                        @csrf
                                        @method('put')
                                        <div class="form-group mb-4">
                                            <label for="current_password" :value="__('Current Password')">Current password</label>
                                            <input type="password" name="current_password" class="form-control" id="current_password">
                                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-danger" />
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="password">New password</label>
                                            <input type="password" class="form-control" id="password" name="password">
                                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-danger" />
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="password_confirmation">Confirm password</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-danger" />
                                        </div>
                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn  btn-success mb-2 btn-pill">Update
                                                Password</button>
                                        </div>
                                        @if (session('status') === 'password-updated')
                                        <script>
                                            alert('Password updated successfully');
                                        </script>
                                        @endif
                                    </form>

                                </section>
                                <section>
                                    <header class="ml-3">
                                        <h3 class="text-lg font-medium text-gray-900">
                                            {{ __('Apply To Be A specialist') }}
                                        </h3>


                                    </header>


                                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                        @csrf
                                        <div class="form-group mb-4">
                                            <label for="oldPassword">Old password</label>
                                            <input type="password" class="form-control" id="oldPassword">
                                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="newPassword">New password</label>
                                            <input type="password" class="form-control" id="newPassword">
                                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                        </div>


                                        <div class="form-group mb-4">
                                            <label for="conPassword">Confirm password</label>
                                            <input type="password" class="form-control" id="conPassword">
                                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                        </div>
                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn  btn-success mb-2 btn-pill">Submit</button>

                                        </div>
                                    </form>

                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-users.layouts.master>