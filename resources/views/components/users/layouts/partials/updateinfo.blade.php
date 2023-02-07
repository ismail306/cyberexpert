<section>

    <header class="ml-3">
        <h3 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h3>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>
    <form method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">
        <div class="form-group mb-4">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="">

        </div>


        <div class="form-group mb-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="">
        </div>

        <div class="form-group">
            <label for="profile_pic">Image</label>
            <input type="file" name="profile_pic" required class="form-control" id="profile_pic" aria-describedby="emailHelp">
            @error('profile_pic')
            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
            <small id="emailHelp" class="form-text text-muted">The ideal ratio of primary image is 1:1, The
                image will be crop to fit if it is not maintain the exact ratio.</small>

        </div>

        <div class="d-flex justify-content-end mt-5">
            <button type="submit" class="btn btn-success mb-2 btn-pill">Update
                Profile</button>
        </div>
    </form>

</section>