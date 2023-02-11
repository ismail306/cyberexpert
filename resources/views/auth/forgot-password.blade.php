<x-users.layouts.master>

    <div class="container padding-bottom-3x mb-2 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="forgot">

                    <h2>Forgot your password?</h2>
                    <p>Change your password in three easy steps. This will help you to secure your password!</p>
                    <ol class="list-unstyled">
                        <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
                        <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
                        <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
                    </ol>

                </div>
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="card mt-4" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email-for-pass">Enter your email address</label>
                            <input class="form-control" type="email" name="email" id="email-for-pass" required :value="old('email')"><small class="form-text text-muted">Enter the email address you used during the registration on cyberecpert. Then we'll email a link to this address.</small>

                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit">Get New Password</button>
                        <button class="btn btn-danger" type="submit">Back to Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-users.layouts.master>