<section>
    <header class="ml-3">
        <h3 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h3>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>


    <form method="post" action="{{ route('password.update') }}" name='signinform' onsubmit="return validateform()" class="mt-6 space-y-6">
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