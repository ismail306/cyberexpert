<section>
    <header class="ml-3">
        <h3 class="text-lg font-medium text-gray-900">
            {{ __('Apply To Be A specialist') }}
        </h3>
    </header>


    <form method="post" action="{{ route('specialistinfo.store') }}" class="mt-6 space-y-6">
        @csrf
        <div class="form-group mt-4">
            <label for="about">About </label>
            <textarea class="form-control" required name="about" id="about" rows="2" maxlength="75" placeholder="About Yourself ..."></textarea>
            @error('about')
            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
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

        <div class="form-group">
            <label for="certificate">Certificate</label>
            <input type="file" required name="certificate" class="form-control" id="certificate" aria-describedby="emailHelp">
            @error('certificate')
            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror


        </div>

        <div class="d-flex justify-content-end mt-5">
            <button type="submit" class="btn  btn-success mb-2 btn-pill">Submit</button>
            <button type="reset" class="btn  btn-danger mb-2 ml-3 btn-pill">Discard All</button>
        </div>


    </form>

</section>