<x-users.layouts.master>
    <div class="container padding-bottom-3x mb-2 mt-5">
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-10  border border-dark rounded mb-4">
                <header class="ml-3">
                    <h3 class="text-lg font-medium text-gray-900">
                        {{ __('Reset Password') }}
                    </h3>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Ensure your account is using a long, random password to stay secure.') }}
                    </p>
                </header>


                <form method="post" action="{{ route('password.store')  }}" name='signinform' onsubmit="return validateform()" class="mt-6 space-y-6">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <!-- Email Address -->
                    <div class="form-group mb-4">
                        <label for="email" :value="__('Email')">Email</label>
                        <input type="email" required name="email" class="form-control" id="email" value="{{ old('email', $request->email) }}">
                        @error('email')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="password" :value="__('Password')">New Password</label>
                        <input type="password" required name="password" class="form-control" id="password">
                        @error('password')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group mb-4">
                        <label for="password_confirmation">Confirm password</label>
                        <input type="password" required class="form-control" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end my-4">
                        <button type="submit" class="btn  btn-success mb-2 btn-pill">Reset
                            Password</button>
                    </div>

                    @if (session('status') === 'password-updated')
                    <script>
                        alert('Password reset successfully');
                    </script>

                    @endif
                </form>

            </div>
        </div>
    </div>

</x-users.layouts.master>